<?php
class template_Figure_fluid_html_195b6123077e3693 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getOriginalTemplatePath(): ?string {
        return '/var/www/html/vendor/typo3/theme-camino/Resources/Private/Templates/Partials/Components/Figure.fluid.html';
    }
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): ?string {
        return (string)'';
    }
    public function hasLayout(): bool {
        return false;
    }
    public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): void {
        $renderingContext->getViewHelperResolver()->setLocalNamespaces(array (
  'f' => 
  array (
    0 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
));
    }
    
    
    /**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output0 = '';

$output0 .= '




';

$output0 .= '';

$output0 .= '';

$output0 .= '';

$output0 .= '

<figure class="figure">
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output9 = '';

$output9 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
$output12 = '';

$output12 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
return NULL;
};

$arguments13 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Atoms/Video',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
];

$output12 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments13, $renderingContext, $renderChildrenClosure14);

$output12 .= '
        ';
return $output12;
};

$arguments10 = [
'value' => 4,
];

$output9 .= '';

$output9 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure16 = function() use ($renderingContext) {
$output17 = '';

$output17 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
return NULL;
};

$arguments18 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Atoms/Image',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
];

$output17 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments18, $renderingContext, $renderChildrenClosure19);

$output17 .= '
        ';
return $output17;
};

$arguments15 = [
];

$output9 .= '';

$output9 .= '
    ';
return $output9;
};

$arguments1 = [
'expression' => $renderingContext->getVariableProvider()->getByPath('type'),
];

$output0 .= call_user_func_array(function($arguments) use ($renderingContext) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext) {

return 4;
}): return call_user_func(function() use ($renderingContext) {
$output3 = '';

$output3 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return NULL;
};

$arguments4 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Atoms/Video',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
];

$output3 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments4, $renderingContext, $renderChildrenClosure5);

$output3 .= '
        ';
return $output3;
});
default: return call_user_func(function() use ($renderingContext) {
$output6 = '';

$output6 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
return NULL;
};

$arguments7 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Atoms/Image',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
];

$output6 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments7, $renderingContext, $renderChildrenClosure8);

$output6 .= '
        ';
return $output6;
});
}
}, array($arguments1));

$output0 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array20 = [
'0' => $renderingContext->getVariableProvider()->getByPath('copyright'),
'1' => ' || ',
'2' => $renderingContext->getVariableProvider()->getByPath('description'),
];

$expression21 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments30 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression21(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array20)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output22 = '';

$output22 .= '
        <figcaption class="figure__caption">';

$output22 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('description')]);

$output22 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array23 = [
'0' => $renderingContext->getVariableProvider()->getByPath('description'),
'1' => ' && ',
'2' => $renderingContext->getVariableProvider()->getByPath('copyright'),
];

$expression24 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments25 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression24(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array23)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
return '<br>';
},
];

$output22 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments25, $renderingContext)
;

$output22 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array26 = [
'0' => $renderingContext->getVariableProvider()->getByPath('copyright'),
];

$expression27 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments29 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression27(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array26)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output28 = '';

$output28 .= '&copy; ';

$output28 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('copyright')]);
return $output28;
},
];

$output22 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments29, $renderingContext)
;

$output22 .= '
        </figcaption>
    ';
return $output22;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments30, $renderingContext)
;

$output0 .= '
</figure>


';

    return $output0;
}

}

#