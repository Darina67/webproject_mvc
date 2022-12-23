<?php
class GalleryController extends Controller
{
    private $pageTpl = "/views/gallery.tpl.php";

    public function __construct()
    {
        $this->model = new GalleryModel();
        $this->view = new View();
    }
    public function index()
    {
        $this->pageData['title'] = "Галерея";

        $this->view->render($this->pageTpl, $this->pageData);
    }
}
