<?php



class ReviewsController extends Controller{

    function __construct()
    {
        $this->model = new Reviews();
        $page = Storage::get('get');
        $page = $this->correctPage($page);
        $this->page = $page;
    }

    public function ViewReviews(){
        $limit = 4;
        $page = $this->page;

        $review =  $this->model->getAllReviews($page, $limit, 'date DESC');
        $total = $this->model->getTotalReviews();
        $pagination = $this->paginate($total, $page, $limit);

        include_once ROOT . '/template/libs/captcha/simple-php-captcha.php';
        $_SESSION['captcha'] = (simple_php_captcha());

        Page::render('reviews', ['reviews' => $review, 'pagination' => $pagination]);
    }


}