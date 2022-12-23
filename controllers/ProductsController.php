<?php
class ProductsController extends Controller
{
    private $pageTpl = "/views/products.tpl.php";

    public function __construct()
    {
        $this->model = new ProductsModel();
        $this->view = new View();
    }
    public function index()
    {
        $this->pageData['title'] = "Страница с данными";

        $data = $this->model->getData();

        $this->pageData['data'] = $data;

        $this->view->render($this->pageTpl, $this->pageData);

        if (!empty($_POST)) {
            $action  = $_POST['action'];
            switch ($action) {
                case 'addData':
                    if ($this->AddData()) {
                        $this->pageData['registerMsg'] = "Данные успешно добавлены";
                    } else {
                        $this->pageData['registerMsg'] = "Произошла ошибка при добавлении";
                    }
            }
        }
    }
    public function AddData()
    {
        if (!empty($_POST['surname']) && !empty($_POST['site'])  && !empty($_POST['phone'])  && !empty($_POST['country'])  && !empty($_POST['status'])) {
            $newSurname = $_POST['surname'];
            $newSite = $_POST['site'];
            $newPhone = $_POST['phone'];
            $newCountry = $_POST['country'];
            $newStatus = $_POST['status'];
            $this->model->addNewData($newSurname, $newSite, $newPhone, $newCountry, $newStatus);
            // header("Location: /cabinet/gallery");
        } else {
            $this->pageData['registerMsg'] = "Вы заполнили не все поля";
            return false;
        }
    }
}
