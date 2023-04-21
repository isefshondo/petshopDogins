<?php
    function createPagination($total, $resultsPerPage, $currentPage, $url){
        $totalPages = ceil($total / $resultsPerPage);
        $next = $currentPage+1<=$totalPages ? $currentPage+1 : $currentPage;  
        $prev = $currentPage-1>=1 ? $currentPage-1 : $currentPage;  

        echo "<ul class='pagination'>".
                "<li class='page'><a href='$url?page=$prev' class='arrow'>&laquo;</a></li>".
                "<li class='prev'><a href='$url?page=$prev'>&larr; Anterior</a></li>";
        
        for($page=1; $page<=$totalPages; $page++){
            if($page == $currentPage){
                echo "<li class='page'><a class='currentPage'>$page</a></li>";
            }else{
                echo "<li class='page'><a href='$url?page=$page'>$page</a></li>";
            }
        }

        echo "<li class='next'><a href='$url?page=$next'>Próxima &rarr;</a></li>".
             "<li class='page'><a href='$url?page=$next' class='arrow'>&raquo;</a></li>".
             "</ul>";
    }
?>
