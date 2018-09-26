<!-- ######################     Main Navigation   ########################## -->
<nav>
    <ol>
        <?php
        // This sets a class for current page so you can style it differently

        print '<li ';
        if ($PATH_PARTS['filename'] == 'index') {
            print ' class="activePage" ';
        }
        print '><a href="index.php">Home</a></li>';

        print '<li ';
        if ($PATH_PARTS['filename'] == 'form') {
            print ' class="activePage" ';
        }
        print '><a href="form.php">Form</a></li>';

        print '<li ';
        if ($PATH_PARTS['filename'] == 'tables.php') {
            print ' class="activePage" ';
        }
        print '><a href="sampleQuery2.php">Tables</a></li>';
        ?>
    </ol>
</nav>
<!-- #################### Ends Main Navigation    ########################## -->
