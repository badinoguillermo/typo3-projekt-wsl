<?php
class template_CaminoTextmediaTeaserGrid_fluid_html_768fd8541e375b13 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getOriginalTemplatePath(): ?string {
        return '/var/www/html/vendor/typo3/theme-camino/Resources/Private/Templates/Content/CaminoTextmediaTeaserGrid.fluid.html';
    }
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): ?string {
        
return 'Content/Default';
    }
    public function hasLayout(): bool {
        return true;
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
 * section Header
 */
public function section_bf6366eeece4db89(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    return NULL;
}
/**
 * section Main
 */
public function section_b0000ec1c8d5f383(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output0 = '';

$output0 .= '
    <div class="textmedia-teaser-grid">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Render\TextViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
return NULL;
};

$arguments3 = [
'optional' => false,
'record' => $renderingContext->getVariableProvider()->getByPath('record'),
'field' => 'header',
];
$renderChildrenClosure4 = ($arguments3['record'] !== null) ? function() use ($arguments3) { return $arguments3['record']; } : $renderChildrenClosure4;return $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Render\TextViewHelper::class, $arguments3, $renderingContext, $renderChildrenClosure4);
};

$arguments1 = [
'value' => NULL,
'name' => 'header',
];
$renderChildrenClosure2 = ($arguments1['value'] !== null) ? function() use ($arguments1) { return $arguments1['value']; } : $renderChildrenClosure2;
$output0 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments1, $renderingContext, $renderChildrenClosure2)]);

$output0 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Render\TextViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
return NULL;
};

$arguments7 = [
'optional' => false,
'record' => $renderingContext->getVariableProvider()->getByPath('record'),
'field' => 'bodytext',
];
$renderChildrenClosure8 = ($arguments7['record'] !== null) ? function() use ($arguments7) { return $arguments7['record']; } : $renderChildrenClosure8;return $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Render\TextViewHelper::class, $arguments7, $renderingContext, $renderChildrenClosure8);
};

$arguments5 = [
'value' => NULL,
'name' => 'bodytext',
];
$renderChildrenClosure6 = ($arguments5['value'] !== null) ? function() use ($arguments5) { return $arguments5['value']; } : $renderChildrenClosure6;
$output0 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments5, $renderingContext, $renderChildrenClosure6)]);

$output0 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure10 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Render\TextViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
return NULL;
};

$arguments11 = [
'optional' => false,
'record' => $renderingContext->getVariableProvider()->getByPath('record'),
'field' => 'subheader',
];
$renderChildrenClosure12 = ($arguments11['record'] !== null) ? function() use ($arguments11) { return $arguments11['record']; } : $renderChildrenClosure12;return $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Render\TextViewHelper::class, $arguments11, $renderingContext, $renderChildrenClosure12);
};

$arguments9 = [
'value' => NULL,
'name' => 'subheader',
];
$renderChildrenClosure10 = ($arguments9['value'] !== null) ? function() use ($arguments9) { return $arguments9['value']; } : $renderChildrenClosure10;
$output0 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments9, $renderingContext, $renderChildrenClosure10)]);

$output0 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array13 = [
'0' => $renderingContext->getVariableProvider()->getByPath('header'),
'1' => ' || ',
'2' => $renderingContext->getVariableProvider()->getByPath('bodytext'),
'3' => ' || ',
'4' => $renderingContext->getVariableProvider()->getByPath('subheader'),
];

$expression14 = function($context) {return ((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"])) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node4"]));};

$arguments21 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression14(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array13)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output15 = '';

$output15 .= '
            <div class="textmedia-teaser-grid__intro">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Render\TextViewHelper
$renderChildrenClosure20 = function() use ($renderingContext) {
return NULL;
};

$arguments19 = [
'optional' => false,
'record' => $renderingContext->getVariableProvider()->getByPath('record'),
'field' => 'tx_themecamino_link_label',
];
$renderChildrenClosure20 = ($arguments19['record'] !== null) ? function() use ($arguments19) { return $arguments19['record']; } : $renderChildrenClosure20;
$array18 = [
'header' => $renderingContext->getVariableProvider()->getByPath('header'),
'subheader' => $renderingContext->getVariableProvider()->getByPath('subheader'),
'headertag' => $renderingContext->getVariableProvider()->getByPath('record.headertag'),
'layout' => $renderingContext->getVariableProvider()->getByPath('record.header_layout'),
'text' => $renderingContext->getVariableProvider()->getByPath('bodytext'),
'link' => $renderingContext->getVariableProvider()->getByPath('record.tx_themecamino_link'),
'label' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Render\TextViewHelper::class, $arguments19, $renderingContext, $renderChildrenClosure20),
'config' => $renderingContext->getVariableProvider()->getByPath('record.tx_themecamino_link_config'),
'icon' => $renderingContext->getVariableProvider()->getByPath('record.tx_themecamino_link_icon'),
];

$arguments16 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Components/Intro',
'arguments' => $array18,
];

$output15 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments16, $renderingContext, $renderChildrenClosure17);

$output15 .= '
            </div>
        ';
return $output15;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments21, $renderingContext)
;

$output0 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array22 = [
'0' => $renderingContext->getVariableProvider()->getByPath('record.tx_themecamino_list_elements'),
];

$expression23 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments42 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression23(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array22)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output24 = '';

$output24 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure26 = function() use ($renderingContext) {
$output27 = '';

$output27 .= '
                <div class="textmedia-teaser-grid__grid">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
$output30 = '';

$output30 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure32 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Render\TextViewHelper
$renderChildrenClosure35 = function() use ($renderingContext) {
return NULL;
};

$arguments34 = [
'optional' => false,
'record' => $renderingContext->getVariableProvider()->getByPath('item'),
'field' => 'header',
];
$renderChildrenClosure35 = ($arguments34['record'] !== null) ? function() use ($arguments34) { return $arguments34['record']; } : $renderChildrenClosure35;// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Render\TextViewHelper
$renderChildrenClosure37 = function() use ($renderingContext) {
return NULL;
};

$arguments36 = [
'optional' => false,
'record' => $renderingContext->getVariableProvider()->getByPath('item'),
'field' => 'text',
];
$renderChildrenClosure37 = ($arguments36['record'] !== null) ? function() use ($arguments36) { return $arguments36['record']; } : $renderChildrenClosure37;// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Render\TextViewHelper
$renderChildrenClosure39 = function() use ($renderingContext) {
return NULL;
};

$arguments38 = [
'optional' => false,
'record' => $renderingContext->getVariableProvider()->getByPath('item'),
'field' => 'category',
];
$renderChildrenClosure39 = ($arguments38['record'] !== null) ? function() use ($arguments38) { return $arguments38['record']; } : $renderChildrenClosure39;// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Render\TextViewHelper
$renderChildrenClosure41 = function() use ($renderingContext) {
return NULL;
};

$arguments40 = [
'optional' => false,
'record' => $renderingContext->getVariableProvider()->getByPath('item'),
'field' => 'link_label',
];
$renderChildrenClosure41 = ($arguments40['record'] !== null) ? function() use ($arguments40) { return $arguments40['record']; } : $renderChildrenClosure41;
$array33 = [
'image' => $renderingContext->getVariableProvider()->getByPath('item.images.0'),
'header' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Render\TextViewHelper::class, $arguments34, $renderingContext, $renderChildrenClosure35),
'text' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Render\TextViewHelper::class, $arguments36, $renderingContext, $renderChildrenClosure37),
'date' => $renderingContext->getVariableProvider()->getByPath('item.date'),
'category' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Render\TextViewHelper::class, $arguments38, $renderingContext, $renderChildrenClosure39),
'link' => $renderingContext->getVariableProvider()->getByPath('item.link'),
'label' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Render\TextViewHelper::class, $arguments40, $renderingContext, $renderChildrenClosure41),
'icon' => $renderingContext->getVariableProvider()->getByPath('item.link_icon'),
'layout' => $renderingContext->getVariableProvider()->getByPath('record.layout'),
];

$arguments31 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Components/Textmediateaser',
'arguments' => $array33,
];

$output30 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments31, $renderingContext, $renderChildrenClosure32);

$output30 .= '
                    ';
return $output30;
};

$arguments28 = [
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('record.tx_themecamino_list_elements'),
'as' => 'item',
];

$output27 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments28, $renderingContext, $renderChildrenClosure29);

$output27 .= '
                </div>
            ';
return $output27;
};

$arguments25 = [
'section' => NULL,
'delegate' => NULL,
'arguments' => [],
'optional' => false,
'default' => NULL,
'debug' => true,
'partial' => 'Wrapper/Teaserscroller',
'contentAs' => 'content',
];

$output24 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments25, $renderingContext, $renderChildrenClosure26);

$output24 .= '
        ';
return $output24;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments42, $renderingContext)
;

$output0 .= '
    </div>
';

    return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output43 = '';

$output43 .= '




';

$output43 .= '';

$output43 .= '

';

$output43 .= '';

$output43 .= '

';

$output43 .= '';

$output43 .= '


';

    return $output43;
}

}

#