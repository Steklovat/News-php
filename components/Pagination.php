<?php
class Pagination
{
    private $index = 'page';

    private $current_page;

    private $total;

    private $limit;

    public function __construct($total, $currentPage, $limit, $index)
    {
        $this->total = $total;

        $this->limit = $limit;

        $this->index = $index;

        $this->amount = $this->amount();

        $this->setCurrentPage($currentPage);
    }

    public function get()
    {
        $html = null;
        $links = null;

        $amount = $this->amount();

        for ($page = 1; $page <= $amount; $page++) {
            if ($page == $this->current_page) {
                $links .= '<a href = "#" class="active">' . $page . '</a>' . '<link href="../templates/css/style.css" rel="stylesheet" type="text/css"/>';
            } else {
                $links .= $this->generateHtml($page);
            }
        }
        
        $html .= $links;

        return $html;
    }
    
    private function generateHtml($page, $text = null)
    {
        if (!$text)
            $text = $page;
                    
        return
                '<a href="/news/?'.$this->index.'=' . $page . '">' . $text . '</a>';
    }

    private function setCurrentPage($currentPage)
    {
        $this->current_page = $currentPage;

        if ($this->current_page > 0) {
            if ($this->current_page > $this->amount)
                $this->current_page = $this->amount;
        } else
            $this->current_page = 1;
    }

    private function amount()
    {
        return ceil($this->total / $this->limit);
    }
}