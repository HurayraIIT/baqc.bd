<?php
function include_svg($name, $classes = '') {
    $path = __DIR__ . "/svgs/{$name}.php";
    if (file_exists($path)) {
        // If specific classes are passed, we can't just include the file directly if we want to manipulate it.
        // However, for simplicity in this refactor, we will rely on the SVG files containing the classes or being wrapped.
        // If the user wants to pass classes to the SVG, we might need to modify how SVGs are stored or read them and inject classes.
        // For now, let's assume the SVGs are static or the classes are applied to a wrapper.
        // BUT, looking at the code, classes are on the <svg> tag. 
        // A better approach for the future implies passing classes to the include.
        // Let's read the content and inject/replace classes if needed, or just include it.
        // For this refactor, let's keep it simple: include the file.
        // Note: The prompt asks to "include in the main php file where needed".
        // If we want to support dynamic classes, we can use a placeholder in the SVG php file or just inline the SVG code in the PHP file and echo it.
        
        // Let's try to pass variables to the included file.
        include $path;
    } else {
        echo "<!-- SVG {$name} not found -->";
    }
}
?>
