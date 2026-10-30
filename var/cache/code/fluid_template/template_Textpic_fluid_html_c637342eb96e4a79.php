<?php
class template_Textpic_fluid_html_c637342eb96e4a79 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getOriginalTemplatePath(): ?string {
        return '/var/www/html/vendor/typo3/theme-camino/Resources/Private/Templates/Partials/Content/Textpic.fluid.html';
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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output33 = '';

$output33 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure35 = function() use ($renderingContext) {
$output36 = '';

$output36 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure38 = function() use ($renderingContext) {
return NULL;
};

$arguments37 = [
'name' => 'cssModifier',
'value' => 'above',
];
$renderChildrenClosure38 = ($arguments37['value'] !== null) ? function() use ($arguments37) { return $arguments37['value']; } : $renderChildrenClosure38;
$output36 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments37, $renderingContext, $renderChildrenClosure38)]);

$output36 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure40 = function() use ($renderingContext) {
return NULL;
};

$arguments39 = [
'name' => 'imageSize',
'value' => 'full',
];
$renderChildrenClosure40 = ($arguments39['value'] !== null) ? function() use ($arguments39) { return $arguments39['value']; } : $renderChildrenClosure40;
$output36 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments39, $renderingContext, $renderChildrenClosure40)]);

$output36 .= '
    ';
return $output36;
};

$arguments34 = [
'value' => 0,
];

$output33 .= '';

$output33 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure42 = function() use ($renderingContext) {
$output43 = '';

$output43 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure45 = function() use ($renderingContext) {
return NULL;
};

$arguments44 = [
'name' => 'cssModifier',
'value' => 'below',
];
$renderChildrenClosure45 = ($arguments44['value'] !== null) ? function() use ($arguments44) { return $arguments44['value']; } : $renderChildrenClosure45;
$output43 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments44, $renderingContext, $renderChildrenClosure45)]);

$output43 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure47 = function() use ($renderingContext) {
return NULL;
};

$arguments46 = [
'name' => 'imageSize',
'value' => 'full',
];
$renderChildrenClosure47 = ($arguments46['value'] !== null) ? function() use ($arguments46) { return $arguments46['value']; } : $renderChildrenClosure47;
$output43 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments46, $renderingContext, $renderChildrenClosure47)]);

$output43 .= '
    ';
return $output43;
};

$arguments41 = [
'value' => 8,
];

$output33 .= '';

$output33 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure49 = function() use ($renderingContext) {
$output50 = '';

$output50 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure52 = function() use ($renderingContext) {
return NULL;
};

$arguments51 = [
'name' => 'cssModifier',
'value' => 'left',
];
$renderChildrenClosure52 = ($arguments51['value'] !== null) ? function() use ($arguments51) { return $arguments51['value']; } : $renderChildrenClosure52;
$output50 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments51, $renderingContext, $renderChildrenClosure52)]);

$output50 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure54 = function() use ($renderingContext) {
return NULL;
};

$arguments53 = [
'name' => 'imageSize',
'value' => 'half',
];
$renderChildrenClosure54 = ($arguments53['value'] !== null) ? function() use ($arguments53) { return $arguments53['value']; } : $renderChildrenClosure54;
$output50 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments53, $renderingContext, $renderChildrenClosure54)]);

$output50 .= '
    ';
return $output50;
};

$arguments48 = [
'value' => 26,
];

$output33 .= '';

$output33 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure56 = function() use ($renderingContext) {
$output57 = '';

$output57 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure59 = function() use ($renderingContext) {
return NULL;
};

$arguments58 = [
'name' => 'cssModifier',
'value' => 'right-third',
];
$renderChildrenClosure59 = ($arguments58['value'] !== null) ? function() use ($arguments58) { return $arguments58['value']; } : $renderChildrenClosure59;
$output57 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments58, $renderingContext, $renderChildrenClosure59)]);

$output57 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure61 = function() use ($renderingContext) {
return NULL;
};

$arguments60 = [
'name' => 'imageSize',
'value' => 'small',
];
$renderChildrenClosure61 = ($arguments60['value'] !== null) ? function() use ($arguments60) { return $arguments60['value']; } : $renderChildrenClosure61;
$output57 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments60, $renderingContext, $renderChildrenClosure61)]);

$output57 .= '
    ';
return $output57;
};

$arguments55 = [
'value' => 27,
];

$output33 .= '';

$output33 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure63 = function() use ($renderingContext) {
$output64 = '';

$output64 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure66 = function() use ($renderingContext) {
return NULL;
};

$arguments65 = [
'name' => 'cssModifier',
'value' => 'left-third',
];
$renderChildrenClosure66 = ($arguments65['value'] !== null) ? function() use ($arguments65) { return $arguments65['value']; } : $renderChildrenClosure66;
$output64 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments65, $renderingContext, $renderChildrenClosure66)]);

$output64 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure68 = function() use ($renderingContext) {
return NULL;
};

$arguments67 = [
'name' => 'imageSize',
'value' => 'small',
];
$renderChildrenClosure68 = ($arguments67['value'] !== null) ? function() use ($arguments67) { return $arguments67['value']; } : $renderChildrenClosure68;
$output64 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments67, $renderingContext, $renderChildrenClosure68)]);

$output64 .= '
    ';
return $output64;
};

$arguments62 = [
'value' => 28,
];

$output33 .= '';

$output33 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure70 = function() use ($renderingContext) {
$output71 = '';

$output71 .= '
        ';

$output71 .= '';

$output71 .= '';

$output71 .= '';

$output71 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure73 = function() use ($renderingContext) {
return NULL;
};

$arguments72 = [
'name' => 'cssModifier',
'value' => 'right',
];
$renderChildrenClosure73 = ($arguments72['value'] !== null) ? function() use ($arguments72) { return $arguments72['value']; } : $renderChildrenClosure73;
$output71 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments72, $renderingContext, $renderChildrenClosure73)]);

$output71 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure75 = function() use ($renderingContext) {
return NULL;
};

$arguments74 = [
'name' => 'imageSize',
'value' => 'half',
];
$renderChildrenClosure75 = ($arguments74['value'] !== null) ? function() use ($arguments74) { return $arguments74['value']; } : $renderChildrenClosure75;
$output71 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments74, $renderingContext, $renderChildrenClosure75)]);

$output71 .= '
    ';
return $output71;
};

$arguments69 = [
];

$output33 .= '';

$output33 .= '
';
return $output33;
};

$arguments1 = [
'expression' => $renderingContext->getVariableProvider()->getByPath('record.imageorient'),
];

$output0 .= call_user_func_array(function($arguments) use ($renderingContext) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext) {

return 0;
}): return call_user_func(function() use ($renderingContext) {
$output3 = '';

$output3 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return NULL;
};

$arguments4 = [
'name' => 'cssModifier',
'value' => 'above',
];
$renderChildrenClosure5 = ($arguments4['value'] !== null) ? function() use ($arguments4) { return $arguments4['value']; } : $renderChildrenClosure5;
$output3 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments4, $renderingContext, $renderChildrenClosure5)]);

$output3 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
return NULL;
};

$arguments6 = [
'name' => 'imageSize',
'value' => 'full',
];
$renderChildrenClosure7 = ($arguments6['value'] !== null) ? function() use ($arguments6) { return $arguments6['value']; } : $renderChildrenClosure7;
$output3 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments6, $renderingContext, $renderChildrenClosure7)]);

$output3 .= '
    ';
return $output3;
});
case call_user_func(function() use ($renderingContext) {

return 8;
}): return call_user_func(function() use ($renderingContext) {
$output8 = '';

$output8 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure10 = function() use ($renderingContext) {
return NULL;
};

$arguments9 = [
'name' => 'cssModifier',
'value' => 'below',
];
$renderChildrenClosure10 = ($arguments9['value'] !== null) ? function() use ($arguments9) { return $arguments9['value']; } : $renderChildrenClosure10;
$output8 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments9, $renderingContext, $renderChildrenClosure10)]);

$output8 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
return NULL;
};

$arguments11 = [
'name' => 'imageSize',
'value' => 'full',
];
$renderChildrenClosure12 = ($arguments11['value'] !== null) ? function() use ($arguments11) { return $arguments11['value']; } : $renderChildrenClosure12;
$output8 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments11, $renderingContext, $renderChildrenClosure12)]);

$output8 .= '
    ';
return $output8;
});
case call_user_func(function() use ($renderingContext) {

return 26;
}): return call_user_func(function() use ($renderingContext) {
$output13 = '';

$output13 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
return NULL;
};

$arguments14 = [
'name' => 'cssModifier',
'value' => 'left',
];
$renderChildrenClosure15 = ($arguments14['value'] !== null) ? function() use ($arguments14) { return $arguments14['value']; } : $renderChildrenClosure15;
$output13 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments14, $renderingContext, $renderChildrenClosure15)]);

$output13 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
return NULL;
};

$arguments16 = [
'name' => 'imageSize',
'value' => 'half',
];
$renderChildrenClosure17 = ($arguments16['value'] !== null) ? function() use ($arguments16) { return $arguments16['value']; } : $renderChildrenClosure17;
$output13 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments16, $renderingContext, $renderChildrenClosure17)]);

$output13 .= '
    ';
return $output13;
});
case call_user_func(function() use ($renderingContext) {

return 27;
}): return call_user_func(function() use ($renderingContext) {
$output18 = '';

$output18 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure20 = function() use ($renderingContext) {
return NULL;
};

$arguments19 = [
'name' => 'cssModifier',
'value' => 'right-third',
];
$renderChildrenClosure20 = ($arguments19['value'] !== null) ? function() use ($arguments19) { return $arguments19['value']; } : $renderChildrenClosure20;
$output18 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments19, $renderingContext, $renderChildrenClosure20)]);

$output18 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
return NULL;
};

$arguments21 = [
'name' => 'imageSize',
'value' => 'small',
];
$renderChildrenClosure22 = ($arguments21['value'] !== null) ? function() use ($arguments21) { return $arguments21['value']; } : $renderChildrenClosure22;
$output18 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments21, $renderingContext, $renderChildrenClosure22)]);

$output18 .= '
    ';
return $output18;
});
case call_user_func(function() use ($renderingContext) {

return 28;
}): return call_user_func(function() use ($renderingContext) {
$output23 = '';

$output23 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure25 = function() use ($renderingContext) {
return NULL;
};

$arguments24 = [
'name' => 'cssModifier',
'value' => 'left-third',
];
$renderChildrenClosure25 = ($arguments24['value'] !== null) ? function() use ($arguments24) { return $arguments24['value']; } : $renderChildrenClosure25;
$output23 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments24, $renderingContext, $renderChildrenClosure25)]);

$output23 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
return NULL;
};

$arguments26 = [
'name' => 'imageSize',
'value' => 'small',
];
$renderChildrenClosure27 = ($arguments26['value'] !== null) ? function() use ($arguments26) { return $arguments26['value']; } : $renderChildrenClosure27;
$output23 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments26, $renderingContext, $renderChildrenClosure27)]);

$output23 .= '
    ';
return $output23;
});
default: return call_user_func(function() use ($renderingContext) {
$output28 = '';

$output28 .= '
        ';

$output28 .= '';

$output28 .= '';

$output28 .= '';

$output28 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure30 = function() use ($renderingContext) {
return NULL;
};

$arguments29 = [
'name' => 'cssModifier',
'value' => 'right',
];
$renderChildrenClosure30 = ($arguments29['value'] !== null) ? function() use ($arguments29) { return $arguments29['value']; } : $renderChildrenClosure30;
$output28 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments29, $renderingContext, $renderChildrenClosure30)]);

$output28 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure32 = function() use ($renderingContext) {
return NULL;
};

$arguments31 = [
'name' => 'imageSize',
'value' => 'half',
];
$renderChildrenClosure32 = ($arguments31['value'] !== null) ? function() use ($arguments31) { return $arguments31['value']; } : $renderChildrenClosure32;
$output28 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments31, $renderingContext, $renderChildrenClosure32)]);

$output28 .= '
    ';
return $output28;
});
}
}, array($arguments1));

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array76 = [
'0' => $renderingContext->getVariableProvider()->getByPath('record.recordType'),
'1' => ' != \'text\' && ',
'2' => $renderingContext->getVariableProvider()->getByPath('files.0'),
];

$expression77 = function($context) {return ((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != 'text') && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments82 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression77(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array76)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output78 = '';

$output78 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure80 = function() use ($renderingContext) {
return NULL;
};
$output81 = '';

$output81 .= 'textpic--';

$output81 .= $renderingContext->getVariableProvider()->getByPath('cssModifier');

$arguments79 = [
'name' => 'additionalCssClass',
'value' => $output81,
];
$renderChildrenClosure80 = ($arguments79['value'] !== null) ? function() use ($arguments79) { return $arguments79['value']; } : $renderChildrenClosure80;
$output78 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments79, $renderingContext, $renderChildrenClosure80)]);

$output78 .= '
';
return $output78;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments82, $renderingContext)
;

$output0 .= '

<div class="textpic ';

$output0 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('additionalCssClass')]);

$output0 .= '">
    ';

$output0 .= '';

$output0 .= '';

$output0 .= '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array83 = [
'0' => $renderingContext->getVariableProvider()->getByPath('files.0'),
];

$expression84 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments225 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression84(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array83)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output85 = '';

$output85 .= '
        <div class="textpic__media">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure87 = function() use ($renderingContext) {
$output154 = '';

$output154 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure156 = function() use ($renderingContext) {
$output157 = '';

$output157 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure159 = function() use ($renderingContext) {
return NULL;
};

$array160 = [
'video' => $renderingContext->getVariableProvider()->getByPath('files.0'),
'type' => $renderingContext->getVariableProvider()->getByPath('files.0.properties.type'),
'description' => $renderingContext->getVariableProvider()->getByPath('files.0.description'),
'copyright' => $renderingContext->getVariableProvider()->getByPath('files.0.copyright'),
];

$arguments158 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Components/Figure',
'arguments' => $array160,
];

$output157 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments158, $renderingContext, $renderChildrenClosure159);

$output157 .= '
                ';
return $output157;
};

$arguments155 = [
'value' => 4,
];

$output154 .= '';

$output154 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure162 = function() use ($renderingContext) {
$output163 = '';

$output163 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure165 = function() use ($renderingContext) {
$output192 = '';

$output192 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure194 = function() use ($renderingContext) {
$output195 = '';

$output195 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure197 = function() use ($renderingContext) {
return NULL;
};

$array200 = [
'width' => 1244,
];

$array201 = [
'width' => 968,
];

$array202 = [
'width' => 738,
];

$array199 = [
'md' => $array200,
'sm' => $array201,
'xs' => $array202,
];

$array198 = [
'image' => $renderingContext->getVariableProvider()->getByPath('files.0'),
'width' => 450,
'sources' => $array199,
'description' => $renderingContext->getVariableProvider()->getByPath('files.0.description'),
'copyright' => $renderingContext->getVariableProvider()->getByPath('files.0.copyright'),
];

$arguments196 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Components/Figure',
'arguments' => $array198,
];

$output195 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments196, $renderingContext, $renderChildrenClosure197);

$output195 .= '
                        ';
return $output195;
};

$arguments193 = [
'value' => 'full',
];

$output192 .= '';

$output192 .= '

                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure204 = function() use ($renderingContext) {
$output205 = '';

$output205 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure207 = function() use ($renderingContext) {
return NULL;
};

$array210 = [
'width' => 600,
];

$array211 = [
'width' => 464,
];

$array212 = [
'width' => 472,
];

$array213 = [
'width' => 738,
];

$array209 = [
'lg' => $array210,
'md' => $array211,
'sm' => $array212,
'xs' => $array213,
];

$array208 = [
'image' => $renderingContext->getVariableProvider()->getByPath('files.0'),
'width' => 450,
'sources' => $array209,
'description' => $renderingContext->getVariableProvider()->getByPath('files.0.description'),
'copyright' => $renderingContext->getVariableProvider()->getByPath('files.0.copyright'),
];

$arguments206 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Components/Figure',
'arguments' => $array208,
];

$output205 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments206, $renderingContext, $renderChildrenClosure207);

$output205 .= '
                        ';
return $output205;
};

$arguments203 = [
'value' => 'half',
];

$output192 .= '';

$output192 .= '

                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure215 = function() use ($renderingContext) {
$output216 = '';

$output216 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure218 = function() use ($renderingContext) {
return NULL;
};

$array221 = [
'width' => 288,
];

$array222 = [
'width' => 464,
];

$array223 = [
'width' => 472,
];

$array224 = [
'width' => 738,
];

$array220 = [
'lg' => $array221,
'md' => $array222,
'sm' => $array223,
'xs' => $array224,
];

$array219 = [
'image' => $renderingContext->getVariableProvider()->getByPath('files.0'),
'width' => 450,
'sources' => $array220,
'description' => $renderingContext->getVariableProvider()->getByPath('files.0.description'),
'copyright' => $renderingContext->getVariableProvider()->getByPath('files.0.copyright'),
];

$arguments217 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Components/Figure',
'arguments' => $array219,
];

$output216 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments217, $renderingContext, $renderChildrenClosure218);

$output216 .= '
                        ';
return $output216;
};

$arguments214 = [
];

$output192 .= '';

$output192 .= '
                    ';
return $output192;
};

$arguments164 = [
'expression' => $renderingContext->getVariableProvider()->getByPath('imageSize'),
];

$output163 .= call_user_func_array(function($arguments) use ($renderingContext) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext) {

return 'full';
}): return call_user_func(function() use ($renderingContext) {
$output166 = '';

$output166 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure168 = function() use ($renderingContext) {
return NULL;
};

$array171 = [
'width' => 1244,
];

$array172 = [
'width' => 968,
];

$array173 = [
'width' => 738,
];

$array170 = [
'md' => $array171,
'sm' => $array172,
'xs' => $array173,
];

$array169 = [
'image' => $renderingContext->getVariableProvider()->getByPath('files.0'),
'width' => 450,
'sources' => $array170,
'description' => $renderingContext->getVariableProvider()->getByPath('files.0.description'),
'copyright' => $renderingContext->getVariableProvider()->getByPath('files.0.copyright'),
];

$arguments167 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Components/Figure',
'arguments' => $array169,
];

$output166 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments167, $renderingContext, $renderChildrenClosure168);

$output166 .= '
                        ';
return $output166;
});
case call_user_func(function() use ($renderingContext) {

return 'half';
}): return call_user_func(function() use ($renderingContext) {
$output174 = '';

$output174 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure176 = function() use ($renderingContext) {
return NULL;
};

$array179 = [
'width' => 600,
];

$array180 = [
'width' => 464,
];

$array181 = [
'width' => 472,
];

$array182 = [
'width' => 738,
];

$array178 = [
'lg' => $array179,
'md' => $array180,
'sm' => $array181,
'xs' => $array182,
];

$array177 = [
'image' => $renderingContext->getVariableProvider()->getByPath('files.0'),
'width' => 450,
'sources' => $array178,
'description' => $renderingContext->getVariableProvider()->getByPath('files.0.description'),
'copyright' => $renderingContext->getVariableProvider()->getByPath('files.0.copyright'),
];

$arguments175 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Components/Figure',
'arguments' => $array177,
];

$output174 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments175, $renderingContext, $renderChildrenClosure176);

$output174 .= '
                        ';
return $output174;
});
default: return call_user_func(function() use ($renderingContext) {
$output183 = '';

$output183 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure185 = function() use ($renderingContext) {
return NULL;
};

$array188 = [
'width' => 288,
];

$array189 = [
'width' => 464,
];

$array190 = [
'width' => 472,
];

$array191 = [
'width' => 738,
];

$array187 = [
'lg' => $array188,
'md' => $array189,
'sm' => $array190,
'xs' => $array191,
];

$array186 = [
'image' => $renderingContext->getVariableProvider()->getByPath('files.0'),
'width' => 450,
'sources' => $array187,
'description' => $renderingContext->getVariableProvider()->getByPath('files.0.description'),
'copyright' => $renderingContext->getVariableProvider()->getByPath('files.0.copyright'),
];

$arguments184 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Components/Figure',
'arguments' => $array186,
];

$output183 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments184, $renderingContext, $renderChildrenClosure185);

$output183 .= '
                        ';
return $output183;
});
}
}, array($arguments164));

$output163 .= '
                ';
return $output163;
};

$arguments161 = [
];

$output154 .= '';

$output154 .= '
            ';
return $output154;
};

$arguments86 = [
'expression' => $renderingContext->getVariableProvider()->getByPath('files.0.properties.type'),
];

$output85 .= call_user_func_array(function($arguments) use ($renderingContext) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext) {

return 4;
}): return call_user_func(function() use ($renderingContext) {
$output88 = '';

$output88 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure90 = function() use ($renderingContext) {
return NULL;
};

$array91 = [
'video' => $renderingContext->getVariableProvider()->getByPath('files.0'),
'type' => $renderingContext->getVariableProvider()->getByPath('files.0.properties.type'),
'description' => $renderingContext->getVariableProvider()->getByPath('files.0.description'),
'copyright' => $renderingContext->getVariableProvider()->getByPath('files.0.copyright'),
];

$arguments89 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Components/Figure',
'arguments' => $array91,
];

$output88 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments89, $renderingContext, $renderChildrenClosure90);

$output88 .= '
                ';
return $output88;
});
default: return call_user_func(function() use ($renderingContext) {
$output92 = '';

$output92 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure94 = function() use ($renderingContext) {
$output121 = '';

$output121 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure123 = function() use ($renderingContext) {
$output124 = '';

$output124 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure126 = function() use ($renderingContext) {
return NULL;
};

$array129 = [
'width' => 1244,
];

$array130 = [
'width' => 968,
];

$array131 = [
'width' => 738,
];

$array128 = [
'md' => $array129,
'sm' => $array130,
'xs' => $array131,
];

$array127 = [
'image' => $renderingContext->getVariableProvider()->getByPath('files.0'),
'width' => 450,
'sources' => $array128,
'description' => $renderingContext->getVariableProvider()->getByPath('files.0.description'),
'copyright' => $renderingContext->getVariableProvider()->getByPath('files.0.copyright'),
];

$arguments125 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Components/Figure',
'arguments' => $array127,
];

$output124 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments125, $renderingContext, $renderChildrenClosure126);

$output124 .= '
                        ';
return $output124;
};

$arguments122 = [
'value' => 'full',
];

$output121 .= '';

$output121 .= '

                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure133 = function() use ($renderingContext) {
$output134 = '';

$output134 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure136 = function() use ($renderingContext) {
return NULL;
};

$array139 = [
'width' => 600,
];

$array140 = [
'width' => 464,
];

$array141 = [
'width' => 472,
];

$array142 = [
'width' => 738,
];

$array138 = [
'lg' => $array139,
'md' => $array140,
'sm' => $array141,
'xs' => $array142,
];

$array137 = [
'image' => $renderingContext->getVariableProvider()->getByPath('files.0'),
'width' => 450,
'sources' => $array138,
'description' => $renderingContext->getVariableProvider()->getByPath('files.0.description'),
'copyright' => $renderingContext->getVariableProvider()->getByPath('files.0.copyright'),
];

$arguments135 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Components/Figure',
'arguments' => $array137,
];

$output134 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments135, $renderingContext, $renderChildrenClosure136);

$output134 .= '
                        ';
return $output134;
};

$arguments132 = [
'value' => 'half',
];

$output121 .= '';

$output121 .= '

                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure144 = function() use ($renderingContext) {
$output145 = '';

$output145 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure147 = function() use ($renderingContext) {
return NULL;
};

$array150 = [
'width' => 288,
];

$array151 = [
'width' => 464,
];

$array152 = [
'width' => 472,
];

$array153 = [
'width' => 738,
];

$array149 = [
'lg' => $array150,
'md' => $array151,
'sm' => $array152,
'xs' => $array153,
];

$array148 = [
'image' => $renderingContext->getVariableProvider()->getByPath('files.0'),
'width' => 450,
'sources' => $array149,
'description' => $renderingContext->getVariableProvider()->getByPath('files.0.description'),
'copyright' => $renderingContext->getVariableProvider()->getByPath('files.0.copyright'),
];

$arguments146 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Components/Figure',
'arguments' => $array148,
];

$output145 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments146, $renderingContext, $renderChildrenClosure147);

$output145 .= '
                        ';
return $output145;
};

$arguments143 = [
];

$output121 .= '';

$output121 .= '
                    ';
return $output121;
};

$arguments93 = [
'expression' => $renderingContext->getVariableProvider()->getByPath('imageSize'),
];

$output92 .= call_user_func_array(function($arguments) use ($renderingContext) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext) {

return 'full';
}): return call_user_func(function() use ($renderingContext) {
$output95 = '';

$output95 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure97 = function() use ($renderingContext) {
return NULL;
};

$array100 = [
'width' => 1244,
];

$array101 = [
'width' => 968,
];

$array102 = [
'width' => 738,
];

$array99 = [
'md' => $array100,
'sm' => $array101,
'xs' => $array102,
];

$array98 = [
'image' => $renderingContext->getVariableProvider()->getByPath('files.0'),
'width' => 450,
'sources' => $array99,
'description' => $renderingContext->getVariableProvider()->getByPath('files.0.description'),
'copyright' => $renderingContext->getVariableProvider()->getByPath('files.0.copyright'),
];

$arguments96 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Components/Figure',
'arguments' => $array98,
];

$output95 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments96, $renderingContext, $renderChildrenClosure97);

$output95 .= '
                        ';
return $output95;
});
case call_user_func(function() use ($renderingContext) {

return 'half';
}): return call_user_func(function() use ($renderingContext) {
$output103 = '';

$output103 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure105 = function() use ($renderingContext) {
return NULL;
};

$array108 = [
'width' => 600,
];

$array109 = [
'width' => 464,
];

$array110 = [
'width' => 472,
];

$array111 = [
'width' => 738,
];

$array107 = [
'lg' => $array108,
'md' => $array109,
'sm' => $array110,
'xs' => $array111,
];

$array106 = [
'image' => $renderingContext->getVariableProvider()->getByPath('files.0'),
'width' => 450,
'sources' => $array107,
'description' => $renderingContext->getVariableProvider()->getByPath('files.0.description'),
'copyright' => $renderingContext->getVariableProvider()->getByPath('files.0.copyright'),
];

$arguments104 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Components/Figure',
'arguments' => $array106,
];

$output103 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments104, $renderingContext, $renderChildrenClosure105);

$output103 .= '
                        ';
return $output103;
});
default: return call_user_func(function() use ($renderingContext) {
$output112 = '';

$output112 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure114 = function() use ($renderingContext) {
return NULL;
};

$array117 = [
'width' => 288,
];

$array118 = [
'width' => 464,
];

$array119 = [
'width' => 472,
];

$array120 = [
'width' => 738,
];

$array116 = [
'lg' => $array117,
'md' => $array118,
'sm' => $array119,
'xs' => $array120,
];

$array115 = [
'image' => $renderingContext->getVariableProvider()->getByPath('files.0'),
'width' => 450,
'sources' => $array116,
'description' => $renderingContext->getVariableProvider()->getByPath('files.0.description'),
'copyright' => $renderingContext->getVariableProvider()->getByPath('files.0.copyright'),
];

$arguments113 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Components/Figure',
'arguments' => $array115,
];

$output112 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments113, $renderingContext, $renderChildrenClosure114);

$output112 .= '
                        ';
return $output112;
});
}
}, array($arguments93));

$output92 .= '
                ';
return $output92;
});
}
}, array($arguments86));

$output85 .= '
        </div>
    ';
return $output85;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments225, $renderingContext)
;

$output0 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure227 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Render\TextViewHelper
$renderChildrenClosure229 = function() use ($renderingContext) {
return NULL;
};

$arguments228 = [
'optional' => false,
'record' => $renderingContext->getVariableProvider()->getByPath('record'),
'field' => 'header',
];
$renderChildrenClosure229 = ($arguments228['record'] !== null) ? function() use ($arguments228) { return $arguments228['record']; } : $renderChildrenClosure229;return $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Render\TextViewHelper::class, $arguments228, $renderingContext, $renderChildrenClosure229);
};

$arguments226 = [
'value' => NULL,
'name' => 'header',
];
$renderChildrenClosure227 = ($arguments226['value'] !== null) ? function() use ($arguments226) { return $arguments226['value']; } : $renderChildrenClosure227;
$output0 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments226, $renderingContext, $renderChildrenClosure227)]);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure231 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Render\TextViewHelper
$renderChildrenClosure233 = function() use ($renderingContext) {
return NULL;
};

$arguments232 = [
'optional' => false,
'record' => $renderingContext->getVariableProvider()->getByPath('record'),
'field' => 'bodytext',
];
$renderChildrenClosure233 = ($arguments232['record'] !== null) ? function() use ($arguments232) { return $arguments232['record']; } : $renderChildrenClosure233;return $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Render\TextViewHelper::class, $arguments232, $renderingContext, $renderChildrenClosure233);
};

$arguments230 = [
'value' => NULL,
'name' => 'bodytext',
];
$renderChildrenClosure231 = ($arguments230['value'] !== null) ? function() use ($arguments230) { return $arguments230['value']; } : $renderChildrenClosure231;
$output0 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments230, $renderingContext, $renderChildrenClosure231)]);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array234 = [
'0' => $renderingContext->getVariableProvider()->getByPath('header'),
'1' => ' || ',
'2' => $renderingContext->getVariableProvider()->getByPath('bodytext'),
];

$expression235 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments244 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression235(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array234)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output236 = '';

$output236 .= '
        <div class="textpic__text">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure238 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Render\TextViewHelper
$renderChildrenClosure241 = function() use ($renderingContext) {
return NULL;
};

$arguments240 = [
'optional' => false,
'record' => $renderingContext->getVariableProvider()->getByPath('record'),
'field' => 'subheader',
];
$renderChildrenClosure241 = ($arguments240['record'] !== null) ? function() use ($arguments240) { return $arguments240['record']; } : $renderChildrenClosure241;// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Render\TextViewHelper
$renderChildrenClosure243 = function() use ($renderingContext) {
return NULL;
};

$arguments242 = [
'optional' => false,
'record' => $renderingContext->getVariableProvider()->getByPath('record'),
'field' => 'tx_themecamino_link_label',
];
$renderChildrenClosure243 = ($arguments242['record'] !== null) ? function() use ($arguments242) { return $arguments242['record']; } : $renderChildrenClosure243;
$array239 = [
'header' => $renderingContext->getVariableProvider()->getByPath('header'),
'subheader' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Render\TextViewHelper::class, $arguments240, $renderingContext, $renderChildrenClosure241),
'headertag' => $renderingContext->getVariableProvider()->getByPath('record.header_layout'),
'layout' => $renderingContext->getVariableProvider()->getByPath('record.tx_themecamino_header_style'),
'text' => $renderingContext->getVariableProvider()->getByPath('bodytext'),
'link' => $renderingContext->getVariableProvider()->getByPath('record.tx_themecamino_link'),
'label' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Render\TextViewHelper::class, $arguments242, $renderingContext, $renderChildrenClosure243),
'icon' => $renderingContext->getVariableProvider()->getByPath('record.tx_themecamino_link_icon'),
'config' => $renderingContext->getVariableProvider()->getByPath('record.tx_themecamino_link_config'),
];

$arguments237 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Components/Intro',
'arguments' => $array239,
];

$output236 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments237, $renderingContext, $renderChildrenClosure238);

$output236 .= '
        </div>
    ';
return $output236;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments244, $renderingContext)
;

$output0 .= '
</div>


';

    return $output0;
}

}

#