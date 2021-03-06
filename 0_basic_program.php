<?

$page_title = 'A Basic Program';
$html_title = $page_title . ' | cwalk';
$instructions = 'What are the return type and name of the function that serves as the entry point for any C program?';
$html_description = "$page_title: $instructions";
require_once('header.php');

?>

<div class="instructions">
    <p>
    <?= $instructions ?>
    </p>
</div>

<div class="ide"><input type="text" id="input_0" class="input-medium"/> <input type="text" id="input_1" class="input-medium"/>(void) {
  return (98);
}
</div>
<div id="message"></div>
<div>
    <p>
        <a id="check" class="btn btn-lg btn-info" href="#" role="button" onclick="check();">Check Answer</a>
        <a id="continue" class="btn btn-lg btn-success" href="#" role="button" style="display:none;">Next Question</a>  
    </p>
</div>
<? require_once('footer.php'); ?>
