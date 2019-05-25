<?php
namespace frontend\controllers\auth;

use DomainException;
use shop\forms\auth\ResendVerificationEmailForm;
use shop\services\auth\SignupService;
use shop\services\auth\VerifyEmailService;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\AccessControl;
use shop\forms\auth\SignupForm;


class SignupController extends Controller
{
    private $signupService;
    private $verifyEmailService;

    public function __construct(
        $id,
        $module,
        SignupService $signupService,
        VerifyEmailService $verifyEmailService,
        $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->signupService = $signupService;
        $this->verifyEmailService = $verifyEmailService;
    }

    public function behaviors(): array
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['index'],
                'rules' => [
                    [
                        'actions' => ['index'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                ],
            ],
        ];
    }

    /**
     * @return mixed
     */
    public function actionRequest()
    {
        $form = new SignupForm();
        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            try {
                $this->signupService->signup($form);
                Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');

                return $this->goHome();
            } catch (\RuntimeException $e) {
                Yii::$app->errorHandler->logException($e);
                Yii::$app->session->setFlash('error', $e->getMessage());
            }
        }

        return $this->render('signup', [
            'model' => $form,
        ]);
    }


    /**
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    public function actionConfirm($token)
    {
        try {
            $this->verifyEmailService->validateToken($token);
        } catch (InvalidArgumentException $e) {
            Yii::$app->errorHandler->logException($e);
            throw new BadRequestHttpException($e->getMessage());
        }

        try {
            $user = $this->verifyEmailService->verify($token);
            if (Yii::$app->user->login($user)) {
                Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
                return $this->goHome();
            }
        } catch (DomainException $e) {
            Yii::$app->errorHandler->logException($e);
            Yii::$app->session->setFlash('error', $e->getMessage());
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * @return mixed
     */
    public function actionResend()
    {
        $form = new ResendVerificationEmailForm();
        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            try {
                $this->verifyEmailService->resend($form->email);
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            } catch (DomainException $e) {
                Yii::$app->errorHandler->logException($e);
                Yii::$app->session->setFlash('error', $e->getMessage());
            }
        }

        return $this->render('resend', [
            'model' => $form
        ]);
    }
}
