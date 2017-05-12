<!DOCTYPE html>
<html>
    <head>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        
        <style>
            textarea {
                width: 400px;
                height: 200px;
                max-width: 400px;
                max-height: 200px;
            }
        </style>
    </head>
    <body>
        <div class="form-wrapper">
    
            <form action="" method="post" id="edit" class="well">
                <legend>Edycja bloku: <i><?php echo $this->get('block_id') ?></i></legend>
        <?php echo $this->get('cms_field') ?>
                <input type="hidden" id="type" value="<?php echo $this->get('block_type') ?><" />
                <hr />
                <input type="submit" name="submit" class="btn btn-primary" value="Wyślij"/>
            
            </form>
        
        </div>
    </body>
</html>