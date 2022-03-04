<?php

    try{
        echo '<h3> *** Try *** </h3>';

        //$sql = 'Select * from clientes';
        //mysql_query($sql);

        if(!file_exists('meu_arquivo.php')){
            throw new Exception('O arquivo deveria estar disonível às ' . date('H:i') . ' mas não estava. Vamos continuar mesmo assim!');
        }
    }
    catch(Error $e){
        echo '<h3> *** Catch Error *** </h3>';
        echo '<p style="color: red;">' . $e . '</p>';
    }
    catch(Exception $e){
        echo '<h3> *** Catch Exception *** </h3>';
        echo '<p style="color: red;">' . $e . '</p>';
    }
    finally{
        echo '<h3> *** Finally *** </h3>';
    }

?>