<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use backend\models\PasswordResetRequestForm;
use backend\models\ResetPasswordForm;
use backend\models\SignupForm;
use yii\filters\VerbFilter;
use backend\models\Cat_here;
use backend\models\Cat_hereSearch;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
    
    
    public function actionIndex()
    {
        
       if (!\Yii::$app->user->isGuest) {
           return $this->render('index');
           
        }else{
            
            $model = new LoginForm();
            if ($model->load(Yii::$app->request->post()) && $model->login()) {
                return $this->goBack();
            } else {
                return $this->render('login', [
                    'model' => $model,
                ]);
            }
            
        }

        
        //return $this->redirect(['/site/login']);
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
        	//return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }
    
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
     // category
     public function actionCategory()
    {
        return $this->render('category');
    }
    //Cat_here
      public function actionCat_here()
    {
        return $this->render('cat_here');
    }
    //Customer
      public function actionCustomer()
    {
        return $this->render('customer');
    }
    //Loc_here
      public function actionLoc_here()
    {
        return $this->render('loc_here');
    }
     //Loc_here
      public function actionLoc_here_detail()
    {
        return $this->render('loc_here_detail');
    }
     //Location
      public function actionLocation()
    {
        return $this->render('location');
    }
     //merchant
      public function actionMerchant()
    {
        return $this->render('merchant');
    }
    //profile
      public function actionProfile()
    {
        return $this->render('profile');
    }
    //profile detail
      public function actionProfile_detail()
    {
        return $this->render('profile_detail');
    }
    //profile_tag
      public function actionProfile_tag()
    {
        return $this->render('profile_tag');
    }
    //tag
      public function actionTag()
    {
        return $this->render('tag');
    }
}
