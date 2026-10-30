<?php
class template_LanguageNavigation_fluid_html_7d9f8a3ccd0d6be1 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getOriginalTemplatePath(): ?string {
        return '/var/www/html/vendor/typo3/theme-camino/Resources/Private/Templates/Partials/Pages/LanguageNavigation.fluid.html';
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
 * section LanguageNavigationTitle
 */
public function section_0649082e826db097(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array1 = [
'0' => $renderingContext->getVariableProvider()->getByPath('languageItem.navigationTitle'),
];

$expression2 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments3 = [
'__then' => function() use ($renderingContext) {
return call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('languageItem.navigationTitle')]);
},
'__else' => function() use ($renderingContext) {
return call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('languageItem.title')]);
},
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression2(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1)),
    $renderingContext
),
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments3, $renderingContext)
;

$output0 .= '
';

    return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output4 = '';

$output4 .= '




<div class="header__language-nav" role="navigation" aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
return NULL;
};

$arguments5 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'domain' => 'theme_camino.messages',
'key' => 'menu.language.label',
];

$output4 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments5, $renderingContext, $renderChildrenClosure6)]);

$output4 .= '">
    <div class="header__language-dropdown JS_header-language-dropdown">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
$output9 = '';

$output9 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
return NULL;
};

$arguments10 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'domain' => 'theme_camino.messages',
'key' => 'menu.language.label',
];

$output9 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments10, $renderingContext, $renderChildrenClosure11);

$output9 .= '
        ';
return $output9;
};

$arguments7 = [
'value' => NULL,
'name' => 'activeLanguageTitle',
];
$renderChildrenClosure8 = ($arguments7['value'] !== null) ? function() use ($arguments7) { return $arguments7['value']; } : $renderChildrenClosure8;
$output4 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments7, $renderingContext, $renderChildrenClosure8)]);

$output4 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
$output14 = '';

$output14 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array15 = [
'0' => $renderingContext->getVariableProvider()->getByPath('languageItem.active'),
];

$expression16 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments24 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression16(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array15)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output17 = '';

$output17 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
$output20 = '';

$output20 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
return NULL;
};

$array23 = [
'languageItem' => $renderingContext->getVariableProvider()->getByPath('languageItem'),
];

$arguments21 = [
'partial' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'LanguageNavigationTitle',
'arguments' => $array23,
];

$output20 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments21, $renderingContext, $renderChildrenClosure22);

$output20 .= '
                ';
return $output20;
};

$arguments18 = [
'value' => NULL,
'name' => 'activeLanguageTitle',
];
$renderChildrenClosure19 = ($arguments18['value'] !== null) ? function() use ($arguments18) { return $arguments18['value']; } : $renderChildrenClosure19;
$output17 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments18, $renderingContext, $renderChildrenClosure19)]);

$output17 .= '
            ';
return $output17;
},
];

$output14 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments24, $renderingContext)
;

$output14 .= '
        ';
return $output14;
};

$arguments12 = [
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('languageNavigation'),
'as' => 'languageItem',
];

$output4 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments12, $renderingContext, $renderChildrenClosure13);

$output4 .= '

        <button
            type="button"
            id="header-language-button"
            class="header__language-button JS_header-language-button"
            aria-haspopup="true"
            aria-expanded="false"
            aria-controls="header-language-menu"
            aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure26 = function() use ($renderingContext) {
return NULL;
};

$arguments25 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'domain' => 'theme_camino.messages',
'key' => 'menu.language.label',
];

$output4 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments25, $renderingContext, $renderChildrenClosure26)]);

$output4 .= '"
        >
            <span class="header__language-button-icon header__language-button-icon--globe">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure28 = function() use ($renderingContext) {
return NULL;
};

$array29 = [
'icon' => 'globe',
];

$arguments27 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Icon',
'arguments' => $array29,
];

$output4 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments27, $renderingContext, $renderChildrenClosure28);

$output4 .= '
            </span>
            <span class="header__language-button-text JS_header-language-current">
                ';

$output4 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('activeLanguageTitle')]);

$output4 .= '
            </span>
            <span class="header__language-button-icon header__language-button-icon--chevron">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure31 = function() use ($renderingContext) {
return NULL;
};

$array32 = [
'icon' => 'chevron',
];

$arguments30 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Icon',
'arguments' => $array32,
];

$output4 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments30, $renderingContext, $renderChildrenClosure31);

$output4 .= '
            </span>
        </button>

        <ul id="header-language-menu" class="header__language-menu JS_header-language-menu" aria-hidden="true">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure34 = function() use ($renderingContext) {
$output35 = '';

$output35 .= '
                <li class="header__language-menu-item">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array60 = [
'0' => $renderingContext->getVariableProvider()->getByPath('languageItem.available'),
];

$expression61 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments62 = [
'__then' => function() use ($renderingContext) {
$output36 = '';

$output36 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array53 = [
'0' => $renderingContext->getVariableProvider()->getByPath('languageItem.active'),
];

$expression54 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments55 = [
'__then' => function() use ($renderingContext) {
$output37 = '';

$output37 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure39 = function() use ($renderingContext) {
$output41 = '';

$output41 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure43 = function() use ($renderingContext) {
return NULL;
};

$array44 = [
'languageItem' => $renderingContext->getVariableProvider()->getByPath('languageItem'),
];

$arguments42 = [
'partial' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'LanguageNavigationTitle',
'arguments' => $array44,
];

$output41 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments42, $renderingContext, $renderChildrenClosure43);

$output41 .= '
                                    ';
return $output41;
};

$array40 = [
'lang' => $renderingContext->getVariableProvider()->getByPath('languageItem.hreflang'),
'hreflang' => $renderingContext->getVariableProvider()->getByPath('languageItem.hreflang'),
'aria-current' => 'page',
];

$arguments38 = [
'target' => '',
'title' => '',
'language' => NULL,
'additionalParams' => '',
'addQueryString' => false,
'addQueryStringExclude' => '',
'absolute' => false,
'partsAs' => NULL,
'parts-as' => NULL,
'textWrap' => '',
'parameter' => $renderingContext->getVariableProvider()->getByPath('languageItem.link'),
'class' => 'header__language-menu-link header__language-menu-link--active',
'additionalAttributes' => $array40,
];

$output37 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::class, $arguments38, $renderingContext, $renderChildrenClosure39);

$output37 .= '
                                ';
return $output37;
},
'__else' => function() use ($renderingContext) {
$output45 = '';

$output45 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure47 = function() use ($renderingContext) {
$output49 = '';

$output49 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure51 = function() use ($renderingContext) {
return NULL;
};

$array52 = [
'languageItem' => $renderingContext->getVariableProvider()->getByPath('languageItem'),
];

$arguments50 = [
'partial' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'LanguageNavigationTitle',
'arguments' => $array52,
];

$output49 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments50, $renderingContext, $renderChildrenClosure51);

$output49 .= '
                                    ';
return $output49;
};

$array48 = [
'lang' => $renderingContext->getVariableProvider()->getByPath('languageItem.hreflang'),
'hreflang' => $renderingContext->getVariableProvider()->getByPath('languageItem.hreflang'),
];

$arguments46 = [
'target' => '',
'title' => '',
'language' => NULL,
'additionalParams' => '',
'addQueryString' => false,
'addQueryStringExclude' => '',
'absolute' => false,
'partsAs' => NULL,
'parts-as' => NULL,
'textWrap' => '',
'parameter' => $renderingContext->getVariableProvider()->getByPath('languageItem.link'),
'class' => 'header__language-menu-link',
'additionalAttributes' => $array48,
];

$output45 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::class, $arguments46, $renderingContext, $renderChildrenClosure47);

$output45 .= '
                                ';
return $output45;
},
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression54(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array53)),
    $renderingContext
),
];

$output36 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments55, $renderingContext)
;

$output36 .= '
                        ';
return $output36;
},
'__else' => function() use ($renderingContext) {
$output56 = '';

$output56 .= '
                            <span class="header__language-menu-link header__language-menu-link--disabled" lang="';

$output56 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('languageItem.hreflang')]);

$output56 .= '" aria-disabled="true">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure58 = function() use ($renderingContext) {
return NULL;
};

$array59 = [
'languageItem' => $renderingContext->getVariableProvider()->getByPath('languageItem'),
];

$arguments57 = [
'partial' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'LanguageNavigationTitle',
'arguments' => $array59,
];

$output56 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments57, $renderingContext, $renderChildrenClosure58);

$output56 .= '
                            </span>
                        ';
return $output56;
},
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression61(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array60)),
    $renderingContext
),
];

$output35 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments62, $renderingContext)
;

$output35 .= '
                </li>
            ';
return $output35;
};

$arguments33 = [
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('languageNavigation'),
'as' => 'languageItem',
];

$output4 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments33, $renderingContext, $renderChildrenClosure34);

$output4 .= '
        </ul>
    </div>
</div>

';

$output4 .= '';

$output4 .= '


';

    return $output4;
}

}

#