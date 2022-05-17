<?php 

    function slug($titre){
        $slug = preg_replace('/[^A-Za-z0-9-á-é-í-ó-ú-Á-É-Í-Ó-Ú-Â-Ê-Î-Ô-Û-Ä-Ë-Ï-Ö-Ü-À-Æ-Ç-É-È-Œ-Ù-æ-œ-]+/','-',$titre);
        return strtolower($slug);
    }

    /*Slug caracteres speciaux*/

?>