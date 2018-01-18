<?phpnamespace AppBundle\Service;use AppBundle\Entity\Result;use function PHPSTORM_META\type;use Symfony\Component\Console\Output\OutputInterface;use Symfony\Component\DomCrawler\Crawler;use Symfony\Component\DependencyInjection\ContainerInterface;class TirageService{    private $baseFolder = '../var';    /** @var ContainerInterface $container */    private $container = null;    /**     * TirageService constructor.     * @param ContainerInterface $container     */    public function __construct(ContainerInterface $container)    {        $this->container = $container;    }    /**     * @param string $url     * @return string     */    public static function crawlTest(string $url): string    {        return "";//$this->crawlTest($url);    }    /**     * @param OutputInterface $output     */    public function run(OutputInterface $output)    {        $output->writeln('Run');        //https://www.reducmiz.com/resultat_fdj.php?jeu=loto&nb=all        //https://www.reducmiz.com/resultat_fdj.php?jeu=loto&nb=50        $url = "https://www.reducmiz.com/resultat_fdj.php?jeu=loto&nb=50";//        $url = "http://localhost/Projets/loto/web/app_dev.php/";        $this->importData($url);        die('Run');    }    public function importData(String $url)    {        $dom = new \DOMDocument('1.0');        //        @$dom->loadHTMLFile($this->crawl($url));        $appPath = $this->container->getParameter('kernel.root_dir') . DIRECTORY_SEPARATOR . $this->baseFolder . DIRECTORY_SEPARATOR . 'data';        $file = $appPath . DIRECTORY_SEPARATOR . 'data.html';        @$dom->loadHTMLFile($file);        //echo $dom->saveHTML();//        $elements = $dom->getElementsByTagName('body');        $elements = $dom->getElementsByTagName('table');        if (!is_null($elements)) {            foreach ($elements as $element) {                $result = new Result();//                echo "<br/>" . $element->nodeName . ": ";                dump($element->nodeName);                $nodes = $element->childNodes;                dump($nodes);                /** @var \DOMNodeList $line */                $line = $element->getElementsByTagName('tr');                foreach ($line as $k => $tr) {                    /** @var \DOMNodeList $colArray */                    $colArray = $tr->getElementsByTagName('td');                    if (count($colArray) > 0 && !is_null($colArray)) {                        $value = $colArray->item(0);                        if ($value instanceof \DOMElement && !is_null($value)) {                            switch (trim($value->nodeValue)) {                                case 'date du tirage':                                    if (!is_null($colArray->item(1))) {                                        $data = explode(" ", $colArray->item(1)->nodeValue);                                        $date = \DateTime::createFromFormat('d/m/Y', end($data))->format('Y-m-d');                                        $result->setDate(new \DateTime($date));                                    }                                    break;                                case 'date du tirage':                                    break;                                case 'date du tirage':                                    break;                                case 'date du tirage':                                    break;                                case 'date du tirage':                                    break;                                case 'date du tirage':                                    break;                                case 'date du tirage':                                    break;                                case 'date du tirage':                                    break;                            }                        }                        dump($result);                        dump($colArray);                        dump(current($colArray));                        die;                        foreach ($colArray as $key => $td) {                            dump("col :" . $key . '==>' . $td->nodeValue);                        }                    }                    /* foreach ($col as $key => $td) {                         dump("col :" . $key, $td->nodeValue);                     }*/                }//                die;//                foreach ($nodes as $node) {//                    dump($node->nodeValue);////                    echo $node->nodeValue . "\n";//                }            }        }        die;    }    function clean($text)    {        $clean = html_entity_decode(trim(str_replace(';', '-', preg_replace('/\s+/S', " ", strip_tags($text)))));// remove everything        return $clean;        echo '\n';// throw a new line    }    public function crawl(string $url): string    {        $ch = curl_init($url);        $appPath = $this->container->getParameter('kernel.root_dir');        $fileName = 'data.html';        $targetMove = $appPath . DIRECTORY_SEPARATOR . $this->baseFolder . DIRECTORY_SEPARATOR . 'data';        if (!is_dir($targetMove)) {            @mkdir($targetMove);        }        $file = $targetMove . DIRECTORY_SEPARATOR . $fileName;        if (file_exists($file)) {            unlink($file);        }        $fp_file = fopen($file, 'a');        curl_setopt($ch, CURLOPT_FILE, $fp_file);        curl_setopt($ch, CURLOPT_HEADER, 0);        curl_exec($ch);        curl_close($ch);        fclose($fp_file);        unset($ch, $fp_file, $targetMove, $appPath);        return $file;    }    function url_check($url)    {        $headers = @get_headers($url);        return is_array($headers) ? preg_match('/^HTTP\\/\\d+\\.\\d+\\s+2\\d\\d\\s+.*$/', $headers[0]) : false;    }}/* *   <table class="table table-condensed table-striped">            <tr>                <td>date du tirage</td>                <td align="left" colspan="2"><b>samedi 23/12/2017</b></td>            </tr>            <tr>                <td>tirage</td>                <td bgcolor="#8B0000" align="center" colspan="2"><b><font color="#FFFFFF">4 &nbsp;6 &nbsp;8 &nbsp;44                    &nbsp;48</font></b></td>            </tr>            <tr>                <td>num&eacute;ro chance</td>                <td bgcolor="#FFE4E1" align="center" colspan="2">10</td>            </tr>            <tr>                <td>5 bons nums<br>+ num&eacute;ro chance</td>                <td align="right">0 gagnant</td>                <td align="right">- &#8364;</td>            </tr>            <tr>                <td>5 bons nums</td>                <td align="right">4</td>                <td align="right">100 000 &#8364;</td>            </tr>            <tr>                <td>4 b. n. + num chance</td>                <td align="right">59</td>                <td align="right">1 000 &#8364;</td>            </tr>            <tr>                <td>4 bons nums</td>                <td align="right">561</td>                <td align="right">500 &#8364;</td>            </tr>            <tr>                <td>3 b. n. + num chance</td>                <td align="right">2413</td>                <td align="right">50 &#8364;</td>            </tr>            <tr>                <td>3 bons nums</td>                <td align="right">27384</td>                <td align="right">20 &#8364;</td>            </tr>            <tr>                <td>2 b. n. + num chance</td>                <td align="right">33659</td>                <td align="right">10 &#8364;</td>            </tr>            <tr>                <td>2 bons nums</td>                <td align="right">395738</td>                <td align="right">5 &#8364;</td>            </tr>            <tr>                <td>1 ou 0 b. n. + num chance</td>                <td align="right">424226</td>                <td align="right">2,2 &#8364;</td>            </tr>            <tr>                <td>JOKER+&reg;</td>                <td align="center" colspan="2">0 964 301</td>            </tr>            <tr>                <td>Codes &agrave; 20,000&#8364;</td>                <td align="center" colspan="2">I24908542 ; C18403711 ; F51273828 ; Q09430343 ; E92435504 ; G43146909 ;                    V36877529 ; L50964805 ; F03319230 ; N74946156                </td>            </tr>        </table> * */