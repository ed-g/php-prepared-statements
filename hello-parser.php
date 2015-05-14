<?php 
/* hello-world php parsing, based upon
 * https://github.com/nikic/PHP-Parser/blob/1.x/doc/2_Usage_of_basic_components.markdown
 */
require 'vendor/autoload.php';
ini_set('xdebug.max_nesting_level', 3000);

$parser = new PhpParser\Parser(new PhpParser\Lexer);

$demo_code = '<?php print("hello, world!!"); ?>';

try {
        $stmts = $parser->parse($demo_code);
        // $stmts is an array of statement nodes;
        print_r($stmts);
} catch (PhpParser\Error $e) {
        echo 'Parse Error', $e->getMessage();
}

?>

