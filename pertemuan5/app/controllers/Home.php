<?php 

class Home extends Controller
{
    public function index()
    {   
        $data['judul'] = 'Home';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('template/header', $data);
        $this->view('home/index', $data);
        $this->view('template/footer', $data);

    }

    public function login()
    {
        if (isset($_POST['username'])) {
            $user = $this->model('User_model')->getUserByUsername($_POST['username']);

            // Cek user ada atau tidak
            if (!$user) {
                header('Location: ' . BASE_URL . '/home/login');
                exit;
            }

            // Cek password benar / salah
            if (password_verify($_POST['password'], $user['password'])) {
                header('Location: ' . BASE_URL . '/home/index');
                exit;    
            }
        }

    }

    public function about($company = 'SMKN1')
    {
        $data["judul"] = "About";
        $data["company"] = $company;
        $this->view('template/header', $data);
        $this->view('home/index', $data);
        $this->view('template/footer', $data);
    }

    public function register()
    {

        if (isset($_POST['username'])) {

            $data = [
                'username' => $_POST['username'],
                'email' => $_POST['email'],
                'first_name' => $_POST['first-name'],
                'last_name' => $_POST['last-name'],
                'password' => password_hash($_POST['password'], PASSWORD_BCRYPT),
                // 'verify_password' => $_POST['verify-password'],
            ];
    
            if ($this->model('User_model')->addUser($data)) {
                header('Location: ' . BASE_URL . '/home/signin');
                exit;
            }
    
            
        }

        return $this->view('signup');

    }
    public function signup() {
        $data['judul'] = 'register';
        $this->view('signup', $data);
    }
    public function signin() {
        $data['judul'] = 'login';
        $this->view('sign in', $data);
    }

}
