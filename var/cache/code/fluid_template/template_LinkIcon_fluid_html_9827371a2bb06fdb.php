<?php
class template_LinkIcon_fluid_html_9827371a2bb06fdb extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getOriginalTemplatePath(): ?string {
        return '/var/www/html/vendor/typo3/theme-camino/Resources/Private/Templates/Partials/LinkIcon.fluid.html';
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
    public function getArgumentDefinitions(): array {
        return [
            new TYPO3Fluid\Fluid\Core\ViewHelper\ArgumentDefinition('url', 'string', 'URL to match against for icon detection', true, NULL, NULL, []),
        ];
    }
    
    /**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output0 = '';

$output0 .= '




';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ArgumentViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$arguments1 = [
'optional' => false,
'default' => NULL,
'name' => 'url',
'type' => 'string',
'description' => 'URL to match against for icon detection',
];

$output0 .= '';

$output0 .= '

';

$output0 .= '';

$output0 .= '';

$output0 .= '';

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\StartsWithViewHelper

$arguments75 = [
'subject' => $renderingContext->getVariableProvider()->getByPath('url'),
'search' => 'mailto:',
'__then' => function () { return true;},
'__else' => function () { return false;},
];

$array74 = [
'0' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\StartsWithViewHelper::class, $arguments75, $renderingContext)
,
];

$expression76 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments77 = [
'__then' => function() use ($renderingContext) {
$output3 = '';

$output3 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return NULL;
};

$array6 = [
'icon' => 'mail',
];

$arguments4 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Icon',
'arguments' => $array6,
];

$output3 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments4, $renderingContext, $renderChildrenClosure5);

$output3 .= '
    ';
return $output3;
},
'__elseIf' => [
'0' => [
'condition' => function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\StartsWithViewHelper

$arguments8 = [
'subject' => $renderingContext->getVariableProvider()->getByPath('url'),
'search' => 'tel:',
'__then' => function () { return true;},
'__else' => function () { return false;},
];

$array7 = [
'0' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\StartsWithViewHelper::class, $arguments8, $renderingContext)
,
];

$expression9 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression9(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array7)),
    $renderingContext
);
},
'body' => function() use ($renderingContext) {
$output10 = '';

$output10 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
return NULL;
};

$array13 = [
'icon' => 'phone',
];

$arguments11 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Icon',
'arguments' => $array13,
];

$output10 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments11, $renderingContext, $renderChildrenClosure12);

$output10 .= '
    ';
return $output10;
},
],
'1' => [
'condition' => function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ContainsViewHelper

$arguments15 = [
'value' => 'linkedin',
'subject' => $renderingContext->getVariableProvider()->getByPath('url'),
'__then' => function () { return true;},
'__else' => function () { return false;},
];

$array14 = [
'0' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ContainsViewHelper::class, $arguments15, $renderingContext)
,
];

$expression16 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression16(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array14)),
    $renderingContext
);
},
'body' => function() use ($renderingContext) {
$output17 = '';

$output17 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
return NULL;
};

$array20 = [
'icon' => 'social-linkedin',
];

$arguments18 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Icon',
'arguments' => $array20,
];

$output17 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments18, $renderingContext, $renderChildrenClosure19);

$output17 .= '
    ';
return $output17;
},
],
'2' => [
'condition' => function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ContainsViewHelper

$arguments22 = [
'value' => 'mastodon',
'subject' => $renderingContext->getVariableProvider()->getByPath('url'),
'__then' => function () { return true;},
'__else' => function () { return false;},
];

$array21 = [
'0' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ContainsViewHelper::class, $arguments22, $renderingContext)
,
];

$expression23 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression23(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array21)),
    $renderingContext
);
},
'body' => function() use ($renderingContext) {
$output24 = '';

$output24 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure26 = function() use ($renderingContext) {
return NULL;
};

$array27 = [
'icon' => 'social-mastodon',
];

$arguments25 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Icon',
'arguments' => $array27,
];

$output24 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments25, $renderingContext, $renderChildrenClosure26);

$output24 .= '
    ';
return $output24;
},
],
'3' => [
'condition' => function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ContainsViewHelper

$arguments29 = [
'value' => 'facebook',
'subject' => $renderingContext->getVariableProvider()->getByPath('url'),
'__then' => function () { return true;},
'__else' => function () { return false;},
];

$array28 = [
'0' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ContainsViewHelper::class, $arguments29, $renderingContext)
,
];

$expression30 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression30(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)),
    $renderingContext
);
},
'body' => function() use ($renderingContext) {
$output31 = '';

$output31 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
return NULL;
};

$array34 = [
'icon' => 'social-facebook',
];

$arguments32 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Icon',
'arguments' => $array34,
];

$output31 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments32, $renderingContext, $renderChildrenClosure33);

$output31 .= '
    ';
return $output31;
},
],
'4' => [
'condition' => function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ContainsViewHelper

$arguments36 = [
'value' => 'instagram',
'subject' => $renderingContext->getVariableProvider()->getByPath('url'),
'__then' => function () { return true;},
'__else' => function () { return false;},
];

$array35 = [
'0' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ContainsViewHelper::class, $arguments36, $renderingContext)
,
];

$expression37 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression37(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array35)),
    $renderingContext
);
},
'body' => function() use ($renderingContext) {
$output38 = '';

$output38 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure40 = function() use ($renderingContext) {
return NULL;
};

$array41 = [
'icon' => 'social-instagram',
];

$arguments39 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Icon',
'arguments' => $array41,
];

$output38 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments39, $renderingContext, $renderChildrenClosure40);

$output38 .= '
    ';
return $output38;
},
],
'5' => [
'condition' => function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ContainsViewHelper

$arguments43 = [
'value' => 'youtube',
'subject' => $renderingContext->getVariableProvider()->getByPath('url'),
'__then' => function () { return true;},
'__else' => function () { return false;},
];

$array42 = [
'0' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ContainsViewHelper::class, $arguments43, $renderingContext)
,
];

$expression44 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression44(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array42)),
    $renderingContext
);
},
'body' => function() use ($renderingContext) {
$output45 = '';

$output45 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure47 = function() use ($renderingContext) {
return NULL;
};

$array48 = [
'icon' => 'social-youtube',
];

$arguments46 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Icon',
'arguments' => $array48,
];

$output45 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments46, $renderingContext, $renderChildrenClosure47);

$output45 .= '
    ';
return $output45;
},
],
'6' => [
'condition' => function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ContainsViewHelper

$arguments50 = [
'value' => 'x.com',
'subject' => $renderingContext->getVariableProvider()->getByPath('url'),
'__then' => function () { return true;},
'__else' => function () { return false;},
];

$array49 = [
'0' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ContainsViewHelper::class, $arguments50, $renderingContext)
,
];

$expression51 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression51(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array49)),
    $renderingContext
);
},
'body' => function() use ($renderingContext) {
$output52 = '';

$output52 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure54 = function() use ($renderingContext) {
return NULL;
};

$array55 = [
'icon' => 'social-x',
];

$arguments53 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Icon',
'arguments' => $array55,
];

$output52 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments53, $renderingContext, $renderChildrenClosure54);

$output52 .= '
    ';
return $output52;
},
],
'7' => [
'condition' => function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ContainsViewHelper

$arguments57 = [
'value' => 'twitter',
'subject' => $renderingContext->getVariableProvider()->getByPath('url'),
'__then' => function () { return true;},
'__else' => function () { return false;},
];

$array56 = [
'0' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ContainsViewHelper::class, $arguments57, $renderingContext)
,
];

$expression58 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression58(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array56)),
    $renderingContext
);
},
'body' => function() use ($renderingContext) {
$output59 = '';

$output59 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure61 = function() use ($renderingContext) {
return NULL;
};

$array62 = [
'icon' => 'social-x',
];

$arguments60 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Icon',
'arguments' => $array62,
];

$output59 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments60, $renderingContext, $renderChildrenClosure61);

$output59 .= '
    ';
return $output59;
},
],
'8' => [
'condition' => function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ContainsViewHelper

$arguments64 = [
'value' => 'xing',
'subject' => $renderingContext->getVariableProvider()->getByPath('url'),
'__then' => function () { return true;},
'__else' => function () { return false;},
];

$array63 = [
'0' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ContainsViewHelper::class, $arguments64, $renderingContext)
,
];

$expression65 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression65(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array63)),
    $renderingContext
);
},
'body' => function() use ($renderingContext) {
$output66 = '';

$output66 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure68 = function() use ($renderingContext) {
return NULL;
};

$array69 = [
'icon' => 'social-xing',
];

$arguments67 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Icon',
'arguments' => $array69,
];

$output66 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments67, $renderingContext, $renderChildrenClosure68);

$output66 .= '
    ';
return $output66;
},
],
],
'__else' => function() use ($renderingContext) {
$output70 = '';

$output70 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure72 = function() use ($renderingContext) {
return NULL;
};

$array73 = [
'icon' => 'globe',
];

$arguments71 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Icon',
'arguments' => $array73,
];

$output70 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments71, $renderingContext, $renderChildrenClosure72);

$output70 .= '
    ';
return $output70;
},
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression76(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array74)),
    $renderingContext
),
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments77, $renderingContext)
;

$output0 .= '


';

    return $output0;
}

}

#