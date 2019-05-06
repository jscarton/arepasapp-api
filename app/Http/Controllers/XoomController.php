<?php
namespace App\Http\Controllers;

class XoomController extends Controller
{
    /**
     * @var BaseModel The primary model associated with this controller
     */
    public static $model = BaseModel::class;

    /**
     * @var BaseModel The parent model of the model, in the case of a child rest controller
     */
    public static $parentModel = null;

    /**
     * @var null|BaseTransformer The transformer this controller should use, if overriding the model & default
     */
    public static $transformer = null;

    public function rate($country) {
        /* Use internal libxml errors -- turn on in production, off for debugging 
        libxml_use_internal_errors(true);
        /* Createa a new DomDocument object 
        $dom = new DomDocument;
        /* Load the HTML 
        $dom->loadHTMLFile("https://forums.eveonline.com");
        /* Create a new XPath object 
        $xpath = new DomXPath($dom);
        /* Query all <td> nodes containing specified class name 
        $nodes = $xpath->query("//td[@class='topicViews']");
        /* Set HTTP response header to plain text for debugging output 
        header("Content-type: text/plain");
        /* Traverse the DOMNodeList object to output each DomNode's nodeValue *
        foreach ($nodes as $i => $node) {
            echo "Node($i): ", $node->nodeValue, "\n";
        }*/
        echo "HELLO WORLD";
        exit;
    }
}