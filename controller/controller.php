<?php


class DatingController
{
    private $_f3; //router

    function __construct($f3)
    {
        $this->_f3 = $f3;
    }

    function home()
    {
        //Display the home page
        $view = new Template();
        echo $view->render('views/home.html');
    }

    function personalInfo()
    {
        //If the form has been submitted, add the data to session
        //and send the user to the next order form
        if ($_SERVER['REQUEST_METHOD']  == 'POST') {
            //var_dump($this->_f3);
            //Valid rating initially true
            $this->_f3->set('validPersonalInfo', true);


            $_SESSION['fname'] = $_POST['fname'];
            if (!Validator::validName($_POST['fname']))
            {
                //$this->_f3->set('errors["fname"]', 'Invalid first name');
                $_SESSION['errFname'] = 'Invalid first name';
                $this->_f3->set('validPersonalInfo', false);
                //echo "Invalid first name";
                //var_dump($this->_f3->get('errors'));
                //die();
            }
            else
            {
                $_SESSION['errFname'] = false;
            }

            $_SESSION['lname'] = $_POST['lname'];
            if (!Validator::validName($_POST['lname']))
            {
                $_SESSION['errLname'] = 'Invalid last name';
                $this->_f3->set('validPersonalInfo', false);
                //echo "Invalid last name";
            }
            else
            {
                $_SESSION['errLname'] = false;
            }

            $_SESSION['age'] = $_POST['age'];
            if (!Validator::validAge($_POST['age']))
            {
                $_SESSION['errAge'] = 'Invalid age';
                $this->_f3->set('validPersonalInfo', false);
                //echo "Invalid age";
            }
            else
            {
                $_SESSION['errAge'] = false;
            }

            $_SESSION['gender'] = $_POST['gender'];

            $_SESSION['number'] = $_POST['number'];
            if (!Validator::validNumber($_POST['number']))
            {
                $_SESSION['errNumber'] = 'Invalid phone number';
                $this->_f3->set('validPersonalInfo', false);
                //echo "Invalid phone number";
            }
            else
            {
                $_SESSION['errNumber'] = false;
            }

            //echo $this->_f3->get('validPersonalInfo') == false;
            if ($this->_f3->get('validPersonalInfo') == true)
            {

                header('location: profile');
            }
            else
            {
                header('location: personalinfo');
            }
        }

        //Display the home page
        $view = new Template();
        echo $view->render('views/personalinfo.html');
    }

    function profile()
    {
        //If the form has been submitted, add the data to session
        //and send the user to the next order form
        if ($_SERVER['REQUEST_METHOD']  == 'POST') {

            $this->_f3->set('validProfile', true);

            $_SESSION['email'] = $_POST['email'];
            if (!Validator::validEmail($_SESSION['email']))
            {
                $_SESSION['errEmail'] = 'Invalid Email';
                $this->_f3->set('validProfile', false);

            }
            else
            {
                $_SESSION['errEmail'] = false;
            }

            $_SESSION['state'] = $_POST['state'];
            $_SESSION['seeking'] = $_POST['seeking'];
            $_SESSION['bio'] = $_POST['bio'];
            if ($this->_f3->get('validProfile') == true)
            {
                header('location: interests');
            }
            else
            {

                header('location: profile');
            }
        }

        //Display the home page
        $view = new Template();
        echo $view->render('views/profile.html');
    }

    function interests()
    {
        //If the form has been submitted, add the data to session
        //and send the user to the next order form
        if ($_SERVER['REQUEST_METHOD']  == 'POST') {
            var_dump($_POST);
            $_SESSION['interests'] = $_POST['interests'];

            if (!Validator::validIndoor($_SESSION['interests']) == false)
            {
                echo "Do not spoof indoor items or anything else";
                return;
            }
            if (!Validator::validOutdoor($_SESSION['interests']) == false)
            {
                echo "Do not spoof indoor items or anything else";
                return;
            }


            header('location: summary');
        }
        //var_dump($_SESSION);
        $this->_f3->set('indoor', Datalayer::getIndoorInterests());
        $this->_f3->set('outdoor', Datalayer::getOutdoorInterests());

        //Display the home page
        $view = new Template();
        echo $view->render('views/interests.html');
    }

    function summary()
    {
        //If the form has been submitted, add the data to session
        //and send the user to the next order form
        if ($_SERVER['REQUEST_METHOD']  == 'POST') {
            var_dump($_POST);
        }
        //var_dump($_SESSION);

        //Display the home page
        $view = new Template();
        echo $view->render('views/summary.html');
    }
}