<?php
class CabinetController extends Controller
{
    private $pageTpl = "/views/cabinet.tpl.php";

    public function __construct()
    {
        $this->model = new CabinetModel();
        $this->view = new View();
    }
    public function index()
    {
        $this->pageData['title'] = "Главная страница";

        $data = $this->model->getData();

        $this->pageData['data'] = $data;

        $this->view->render($this->pageTpl, $this->pageData);
    }
}
