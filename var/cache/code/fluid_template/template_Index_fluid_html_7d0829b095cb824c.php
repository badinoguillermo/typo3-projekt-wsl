<?php
class template_Index_fluid_html_7d0829b095cb824c extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getOriginalTemplatePath(): ?string {
        return '/var/www/html/vendor/typo3/cms-workspaces/Resources/Private/Templates/Preview/Index.fluid.html';
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




<div class="typo3-workspace-preview-module">
    <div class="typo3-workspace-topbar t3js-workspace-topbar">
        <div class="typo3-workspace-topbar-container" role="navigation">
            <div class="typo3-workspace-topbar-site">
                <a class="typo3-workspace-topbar-site-logo" href="';

$output0 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoLink')]);

$output0 .= '" target="_blank" rel="noreferrer">
                    <img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$arguments1 = [
'resource' => NULL,
'extensionName' => NULL,
'absolute' => false,
'useCacheBusting' => true,
'path' => 'EXT:backend/Resources/Public/Images/typo3_logo_orange.svg',
];
$renderChildrenClosure2 = ($arguments1['resource'] !== null) ? function() use ($arguments1) { return $arguments1['resource']; } : $renderChildrenClosure2;
$output0 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::class, $arguments1, $renderingContext, $renderChildrenClosure2)]);

$output0 .= '" width="22" height="22" title="TYPO3 Content Management System" alt="" >
                </a>
                <span class="typo3-workspace-topbar-site-name">';

$output0 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('activeWorkspace')]);

$output0 .= '</span>
            </div>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array3 = [
'0' => $renderingContext->getVariableProvider()->getByPath('liveUrl'),
];

$expression4 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments10 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression4(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output5 = '';

$output5 .= '
                <div class="typo3-workspace-topbar-slider t3js-stage-slider-container">
                    <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
return NULL;
};

$arguments6 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:workspaces/Resources/Private/Language/locallang.xlf:window.version.published',
];

$output5 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments6, $renderingContext, $renderChildrenClosure7)]);

$output5 .= '</span>
                    <div class="form-range form-range-sm" style="width: 150px;">
                        <input type="range" class="form-range-input t3js-stage-slider" min="0" max="100" value="100" step="1">
                    </div>
                    <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return NULL;
};

$arguments8 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:workspaces/Resources/Private/Language/locallang.xlf:window.version.staged',
];

$output5 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments8, $renderingContext, $renderChildrenClosure9)]);

$output5 .= '</span>
                </div>
            ';
return $output5;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments10, $renderingContext)
;

$output0 .= '
            <div class="typo3-workspace-topbar-actions">
                <div class="typo3-workspace-topbar-action typo3-workspace-topbar-action-buttons t3js-stage-buttons"></div>
                <div class="typo3-workspace-topbar-action typo3-workspace-topbar-action-mode t3js-preview-mode">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array28 = [
'0' => $renderingContext->getVariableProvider()->getByPath('liveUrl'),
];

$expression29 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments30 = [
'__then' => function() use ($renderingContext) {
$output11 = '';

$output11 .= '
                            <div class="dropdown">
                                <button
                                    type="button"
                                    class="btn btn-sm btn-default dropdown-toggle"
                                    popovertarget="workspace-preview-mode-menu"
                                >
                                    <span class="t3js-active-preview-mode" data-active-preview-mode="';

$output11 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('firstPreviewMode')]);

$output11 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
return NULL;
};
$output14 = '';

$output14 .= 'LLL:EXT:workspaces/Resources/Private/Language/locallang.xlf:preview.mode';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure16 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('firstPreviewMode');
};

$arguments15 = [
'value' => NULL,
'mode' => 'capital',
];

$output14 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\Format\CaseViewHelper::class, $arguments15, $renderingContext, $renderChildrenClosure16);

$arguments12 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => $output14,
];

$output11 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments12, $renderingContext, $renderChildrenClosure13)]);

$output11 .= '</span>
                                </button>
                                <ul id="workspace-preview-mode-menu" class="dropdown-menu" popover>
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
$output19 = '';

$output19 .= '
                                        <li>
                                            <a href="#" class="dropdown-item" data-preview-mode="';

$output19 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mode')]);

$output19 .= '">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
return NULL;
};
$output22 = '';

$output22 .= 'LLL:EXT:workspaces/Resources/Private/Language/locallang.xlf:preview.mode';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure24 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('mode');
};

$arguments23 = [
'value' => NULL,
'mode' => 'capital',
];

$output22 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\Format\CaseViewHelper::class, $arguments23, $renderingContext, $renderChildrenClosure24);

$arguments20 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => $output22,
];

$output19 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments20, $renderingContext, $renderChildrenClosure21)]);

$output19 .= '
                                            </a>
                                        </li>
                                    ';
return $output19;
};

$arguments17 = [
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('splitPreviewModes'),
'as' => 'mode',
];

$output11 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments17, $renderingContext, $renderChildrenClosure18);

$output11 .= '
                                </ul>
                            </div>
                        ';
return $output11;
},
'__else' => function() use ($renderingContext) {
$output25 = '';

$output25 .= '
                            <span class="t3js-active-preview-mode" data-active-preview-mode="none">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
return NULL;
};

$arguments26 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:workspaces/Resources/Private/Language/locallang.xlf:info.newpage.detail',
'extensionName' => 'workspaces',
];

$output25 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments26, $renderingContext, $renderChildrenClosure27)]);

$output25 .= '</span>
                        ';
return $output25;
},
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression29(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)),
    $renderingContext
),
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments30, $renderingContext)
;

$output0 .= '
                </div>
            </div>
        </div>
    </div>

    <div class="typo3-workspace-preview typo3-workspace-preview-';

$output0 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('firstPreviewMode')]);

$output0 .= ' t3js-workspace-preview">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array31 = [
'0' => $renderingContext->getVariableProvider()->getByPath('liveUrl'),
];

$expression32 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments36 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression32(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array31)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output33 = '';

$output33 .= '
            <iframe class="typo3-workspace-view-live t3js-workspace-view-live" src="';

$output33 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('liveUrl')]);

$output33 .= '" style="height: 0px;" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure35 = function() use ($renderingContext) {
return NULL;
};

$arguments34 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:workspaces/Resources/Private/Language/locallang.xlf:iframe.livePreview',
];

$output33 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments34, $renderingContext, $renderChildrenClosure35)]);

$output33 .= '"></iframe>
        ';
return $output33;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments36, $renderingContext)
;

$output0 .= '
        <iframe class="typo3-workspace-view-workspace t3js-workspace-view-workspace" src="';

$output0 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('wsUrl')]);

$output0 .= '" id="workspace-view" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure38 = function() use ($renderingContext) {
return NULL;
};

$array39 = [
'0' => $renderingContext->getVariableProvider()->getByPath('activeWorkspace'),
];

$arguments37 = [
'id' => NULL,
'default' => NULL,
'extensionName' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:workspaces/Resources/Private/Language/locallang.xlf:iframe.workspacePreview',
'arguments' => $array39,
];

$output0 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments37, $renderingContext, $renderChildrenClosure38)]);

$output0 .= '"></iframe>
    </div>
</div>


';

    return $output0;
}

}

#