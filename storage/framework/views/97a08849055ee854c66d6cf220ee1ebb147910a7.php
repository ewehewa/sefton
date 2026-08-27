<?php
    if ($settings->redirect_url != null or !empty($settings->redirect_url)) {
        header("Location: $settings->redirect_url", true, 301);
        exit();
    }
?>

<?php /**PATH /home/teliocec/online.fairwayassetmanagementltd.com/resources/views/home/index.blade.php ENDPATH**/ ?>