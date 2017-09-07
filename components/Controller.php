<?php
Class Controller {
    protected $page;


    /**
     * @param $total
     * @param $page
     * @param $limit
     * @return HTML
     */
    protected function paginate($total, $page, $limit){

       $pagination = new Pagination($total, $page, $limit);
       return $pagination->get();
   }

    /**
     * @param $page
     * @return int page
     */
    public function correctPage($page){
        if(isset($page[0]['page'])){
            $page = $page[0]['page'] * 1;
            if($page <= 0){
                Sessions::setError('Неверный параметр страницы');
                $page = 1;
            }

            if(is_int($page)){

                return $page;
            }
        }
        $page = 1;
        return $page;
    }



    /**
     *
     */
    function __destruct()
    {

    }

}