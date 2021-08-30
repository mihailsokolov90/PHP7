<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 12.02.2019
 * Time: 15:11
 */

namespace core;

require_once "ApplicationBase.php";


final class ApplicationArrays extends ApplicationBase
{
    public function __construct()
    {
        parent::__construct();

        $this->_header = "Arrays Functions";

        $this->data = [
            "info"      => "Main Document",
            "distance"  => "2500 km",
            "azimuth"   => "120",
            "type"      => "point object",
            "color"     => "red"
        ];
    }

    # MAIN INTERFACE
    # --------------------------------------------------------

    # Main Entry
    public final function Exec()
    {
        self::RandomTest();
    }

    # EXAMPLES INTERFACE
    # --------------------------------------------------------

    public function ArraySort()
    {
        $arr = [
            "info"      => "Main Document",
            "distance"  => "2500 km",
            "azimuth"   => "120",
            "type"      => "point object",
            "color"     => "red"
        ];

        echo "<pre>";
        print_r($arr);
        echo "</pre>";

        $this->beginIndent();
        echo "<b>AFTER SORT: </b><br>";
        asort( $arr );

        echo "<pre>";
        print_r($arr);
        echo "</pre>";

        parent::endIndent();

        $this->beginIndent();
        echo "<b>REVERS SORT: </b><br>";

        arsort($arr);

        echo "<pre>";
        print_r($arr);
        echo "</pre>";

        parent::endIndent();
    }

    public function KeySort($path)
    {
        # find items in folder $path
        $dir = opendir($path);

        if( $dir === false ) {
            echo "<span style='color: red;'>Can\'t open the directory $path</span>";
            die("exit");
        }

        $files = [];

        while ( ($it = readdir($dir)) !== false )
        {
            if( is_dir($it) ) $files[$it] = 0;
            else if( is_file($it) ) $files[$it] = filesize($it);
        }

        echo "<p><b>Items in folder <i>$path</i>: </b><br>";
        $this->PrintArray($files);
        echo "</p>";

        uksort( $files, function ($l, $r){
            if( is_dir($l) && is_file($r) ) return -1;
            else if( !is_dir($l) && !is_file($r) ) return 1;

            return $l <=> $r;
        } );

        echo "<p><b>Key sorted Items in folder <i>$path</i>: </b><br>";
        $this->PrintArray($files);
        echo "</p>";

        $rev = array_reverse($files);

        echo "<p><b>Reversed Items in folder <i>$path</i>: </b><br>";
        $this->PrintArray($rev);
        echo "</p>";
    }

    public function MultiSortTest()
    {
        echo "<h2>Multi sort functions</h2>";

        $vec1 = [1, 7, 5, 3, 11, 92];
        $vec2 = ["nat", "grad", "sys", "etc", "red", "cold"];
        $vec3 = ["int", "bool", "double", "short", "int32", "long"];

        echo "<b>Arrays:</b><br>";
        echo "vec1: "; $this->PrintArray($vec1); echo "<br>";
        echo "vec2: "; $this->PrintArray($vec2); echo "<br>";
        echo "vec3: "; $this->PrintArray($vec3); echo "<br>";

        array_multisort($vec1, SORT_ASC, SORT_NUMERIC, $vec2, $vec3);

        echo "<h3>Multi sort: </h3>";

        echo "<b>Arrays:</b><br>";
        echo "vec1: "; $this->PrintArray($vec1); echo "<br>";
        echo "vec2: "; $this->PrintArray($vec2); echo "<br>";
        echo "vec3: "; $this->PrintArray($vec3); echo "<br>";

        shuffle($vec1);

        echo "<b>Shuffle:</b><br>";
        echo "vec1: "; $this->PrintArray($vec1); echo "<br>";

        $keys = array_keys($vec2);
        for($i = 0; $i < count($keys); ++$i)
        {
            $vec2[$i] = $keys[$i].$vec2[$i];
        }

        natsort($vec2);
        echo "nat sorted with keys vec2: "; $this->PrintArray($vec2); echo "<br>";

        $reversed = array_flip($vec3);
        echo "reversed vec3: "; $this->PrintArray($reversed); echo "<br>";

        echo "<h3>Array search:</h3>";
        echo "<b>In array int32: ".in_array("int32", $vec3)."</b>";

        echo "<h3>Array values count:</h3>";
        $a = array_count_values( array_keys($vec3) );
        $this->PrintArray($a); echo "<br>";
    }

    public function ArraySlices()
    {
        # 1
        echo "<h2>Array slices</h2>";

        $vec = ["int", "bool", "double", "short", "int32", "long"];

        echo "<b>Array: </b><br>";
        $this->PrintArray($vec);
        echo "<br>";

        $slice = array_slice($vec, -2, 2);
        echo "<b>Slice: </b><br>";
        $this->PrintArray($slice);
        echo "<br>";

        # 2
        echo "<h2>Array splices</h2>";

        echo "<b>Array: </b><br>";
        $this->PrintArray($vec);
        echo "<br>";

        $splice = array_splice($vec, 2, -2, ["offset", "replaced"]);
        echo "<b>Splice: </b><br>";
        $this->PrintArray($splice);
        echo "<br>";

        echo "<b>Array spliced: </b><br>";
        $this->PrintArray($vec);
        echo "<br>";

        # 3
        echo "<h2>Array stack and queue</h2>";

        $vec2 = ["nat", "grad", "sys", "etc", "red", "cold"];

        echo "<b>Array: </b><br>";
        $this->PrintArray($vec2);
        echo "<br>";

        array_push($vec2, "#", "!", "END");

        echo "<b>Array: </b><br>";
        $this->PrintArray($vec2);
        echo "<br>";

        echo "<b>POP ELEMENT: ".array_pop($vec2)."</b><br>";

        array_unshift($vec2, "NEW ELEMENT", 0x5ffffff);

        echo "<b>Array poped and unshifted: </b><br>";
        $this->PrintArray($vec2);
        echo "<br>";

        echo "<b>SHIFTED ELEMENT: ".array_shift($vec2)."</b><br>";

        echo "<b>Array shifted: </b><br>";
        $this->PrintArray($vec2);
        echo "<br>";
    }

    public function CompactVars()
    {
        echo "<h2>Variables compact tests</h2>";

        $test = "test";
        $value = pow(M_PI, 4);
        $bool = true;
        $vec = ["value", "bool"];

        $arr = compact("test", $vec);

        echo "<b>Packed variables: </b><br>";
        $this->PrintArray($arr);
        echo "<br>";

        unset($test, $value, $bool);

        $arr_upper_case = array_change_key_case($arr, CASE_UPPER);

        extract($arr_upper_case, EXTR_OVERWRITE);
        extract($_SERVER);

        echo "<b>Packed new variables: </b><br>";
        $this->PrintArray($arr_upper_case);
        echo "<br>";

        echo "<b>Unpacked variables: </b><br>";
        echo "<ul>";
        echo "<li> TEST = ${TEST} </li>";
        echo "<li> VALUE = ${VALUE} </li>";
        echo "<li> HTTP_USER_AGENT = $HTTP_USER_AGENT </li>";
        echo "</ul>";
    }


    public function SetOperations()
    {
        echo "<h2>Set operations</h2>";

        $base = ["int", "long", "double", "string"];
        $vec = ["int", "bool", "double", "short", "int32", "long"];

        $intersect = array_intersect($base, $vec);

        echo "<b>Array intersection: </b><br>";
        $this->PrintArray($intersect);
        echo "<br>";

        $diff = array_diff($base, $vec);

        echo "<b>Array diff: </b><br>";
        $this->PrintArray($diff);
        echo "<br>";

        $union = array_unique( array_merge($base, $vec) );

        echo "<b>Array unique: </b><br>";
        $this->PrintArray($union);
        echo "<br>";
    }


    public function JsonSimpleTest()
    {
        $arr_export = [
            "rls_params" => [
                "azimuth" => 120.0,
                "zone_width" => 140.0,
                "id" => 20,
                "base_name" => "RLS COMMON",
                "position" => [20.2342, 144.2312, 1500.24]
            ],
            "no_params", "empty",
            "kpok" => [
                "position" => [20.2342, 144.2312, 1500.24]
            ]
        ];

        $json = json_encode($arr_export, JSON_UNESCAPED_UNICODE);

        echo "<b>JSON encode: </b>";
        $this->PrintArray($json);
        echo "<br>";

        $json_object =
            '{ "object": "rlsdo", "params": { "position": ["123.213","67.4556","800.0"] } }';

        $json_dec = json_decode( $json_object, true );

        echo "<b>JSON encode: </b>";
        $this->PrintArray($json_dec);
        echo "<br>";
    }


    public function MathTest()
    {
        echo "<h2>Math operations</h2>";

        $val = 5.746;
        $val_neg = -5.746;

        echo "<b>Round $val: \t ".round($val)."</b><br>";
        echo "<b>Round $val_neg: \t ".round($val_neg)."</b><br><br>";

        echo "<b>Ceil $val: \t ".ceil($val)."</b><br>";
        echo "<b>Ceil $val_neg: \t ".ceil($val_neg)."</b><br><br>";

        mt_srand( time() );

        $file = fopen( "./js/popper.js", "r" );
        if( $file === false ) die("Can\'t open file");

        $line = "";
        $num = 0;

        for( $i = 0; $i < 100; ++$i )
        {
            if( !($s = fgets($file, 1000)) ) break;
            if( mt_rand(0, $i) == 0 ) { $line = $s; $num = $i; }
        }

        echo "<b>File string number $num: \t <pre>$line</pre></b><br>";

        fclose($file);
    }

    public function RandomTest()
    {
        echo "<h2>Random init</h2>";

        echo "<b>Random: \t ".random_int(0, 100)."</b><br>";
        echo "<b>Random 2: \t ".random_int(-100, 1000)."</b><br><br>";

        echo "<h2>Numbers converter</h2>";

        $num = 44982332;
        echo "<b>Number: \t $num</b><br>";
        echo "<b>bin 1001010100 to: \t ".bindec('1001010100')."</b><br>";
        echo "<b>$num to binary: \t ".decbin($num)."</b><br>";
        echo "<b>$num to hex: \t ".dechex($num)."</b><br>";

        echo "<h2>NaN and Infinite test</h2>";

        $nan = sqrt(-1);
        echo "<b>Nan: \t ".$nan." => isNan = ".is_nan($nan)."</b><br>";

        $inf = pow(0, -1);
        echo "<b>Infinite: \t ".$inf." => isInf = ".is_infinite($inf)."; 1/inf = ".(1/$inf)."</b><br>";

        echo "<b>Divide by zero 1/0: \t ".@(1/0)."</b><br>";

    }

    public function FilesOpen()
    {

    }


    protected $data = [];
}