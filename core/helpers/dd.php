<?php

/**
 * dump and die an Array
 * @param array $input
 * @param bool $isDied
 * @return void
 */
function dd(array $input, bool $isDied = true): void {
    $styles = [
        "div" => "padding: 4px 8px;background-color: #202020;color: white;",
        "p" => "color: #e5e5e5;",
        "strong" => "color: #37ff25;",
        "pre" => "color: #37ff25;",
    ];

    # start container as "div" element
    echo "<div style='{$styles['div']}'>";
        # start count of the input array as "p" element 
        echo "<p style='{$styles['p']}'>Count: <strong style='{$styles['strong']}'>" . count($input) . "</strong></p>";
        # end count of the input array as "p" element
    
        # start row line as "hr" element 
        echo "<hr>";
        # end row line as "hr" element 
        
        # end row line as "hr" element 
        echo "<pre style='{$styles['pre']}'>";
        print_r($input);
        # end row line as "hr" element 
        echo "</pre>";
    
    # end container as "div" element
    echo "</div>";
    
    if($isDied) exit;
}