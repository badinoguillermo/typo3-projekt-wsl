<?php
return ['siteConfiguration' => array (
  'camino' => 
  array (
    'base' => '/camino/',
    'dependencies' => 
    array (
      0 => 'typo3/theme-camino',
    ),
    'languages' => 
    array (
      0 => 
      array (
        'title' => 'English',
        'enabled' => '1',
        'locale' => 'en-US',
        'hreflang' => 'en-US',
        'base' => '/',
        'websiteTitle' => 'Camino',
        'navigationTitle' => 'English',
        'flag' => 'global',
        'languageId' => '0',
      ),
    ),
    'rootPageId' => 1,
    'websiteTitle' => 'Camino',
  ),
), 'resolvedData' => array (
  'camino' => 
  array (
    'rootPageId' => 1,
    'configuration' => 
    array (
      'base' => '/camino/',
      'dependencies' => 
      array (
        0 => 'typo3/theme-camino',
      ),
      'languages' => 
      array (
        0 => 
        array (
          'title' => 'English',
          'enabled' => '1',
          'locale' => 'en-US',
          'hreflang' => 'en-US',
          'base' => '/',
          'websiteTitle' => 'Camino',
          'navigationTitle' => 'English',
          'flag' => 'global',
          'languageId' => '0',
        ),
      ),
      'rootPageId' => 1,
      'websiteTitle' => 'Camino',
      'contentSecurityPolicies' => 
      array (
      ),
      'routeEnhancers' => 
      array (
        'PageTypeSuffix' => 
        array (
          'type' => 'PageType',
          'map' => 
          array (
            'sitemap.xml' => 1533906435,
          ),
        ),
        'Sitemap' => 
        array (
          'type' => 'Simple',
          'routePath' => 'sitemap-type/{sitemap}',
          'aspects' => 
          array (
            'sitemap' => 
            array (
              'type' => 'StaticValueMapper',
              'map' => 
              array (
                'pages' => 'pages',
              ),
            ),
          ),
          '_arguments' => 
          array (
            'sitemap' => 'tx_seo/sitemap',
          ),
        ),
      ),
    ),
    'settings' => 
    \TYPO3\CMS\Core\Site\Entity\SiteSettings::__set_state(array(
       'settings' => 
      \TYPO3\CMS\Core\Settings\Settings::__set_state(array(
         'settings' => 
        array (
          'camino.header.fixedPosition' => false,
          'camino.colorScheme' => 'theme-caramel-cream',
          'seo.sitemap.pages.additionalWhere' => '{#no_index} = 0 AND {#canonical_link} = \'\'',
          'seo.sitemap.pages.excludePagesRecursive' => '',
          'seo.sitemap.pages.excludedDoktypes' => '3, 4, 6, 7, 199, 254',
          'seo.sitemap.view.layoutRootPath' => 'EXT:seo/Resources/Private/Layouts/',
          'seo.sitemap.view.partialRootPath' => 'EXT:seo/Resources/Private/Partials/',
          'seo.sitemap.view.templateRootPath' => 'EXT:seo/Resources/Private/Templates/',
          'form.translation.translationFile' => '',
          'form.templates.layoutRootPath' => '',
          'form.templates.partialRootPath' => '',
          'form.templates.templateRootPath' => '',
          'felogin.view.layoutRootPath' => '',
          'felogin.view.partialRootPath' => '',
          'felogin.view.templateRootPath' => '',
          'felogin.domains' => '',
          'felogin.forgotLinkHashValidTime' => 12,
          'felogin.redirectDisable' => false,
          'felogin.redirectPageLogout' => 0,
          'felogin.redirectPageLoginError' => 0,
          'felogin.redirectPageLogin' => 0,
          'felogin.redirectFirstMethod' => false,
          'felogin.redirectMode' => '',
          'felogin.email.templateName' => 'PasswordRecovery',
          'felogin.email.partialRootPath' => '',
          'felogin.email.templateRootPath' => 'EXT:felogin/Resources/Private/Email/Templates/',
          'felogin.email.layoutRootPath' => '',
          'felogin.dateFormat' => 'Y-m-d H:i',
          'felogin.replyToEmail' => '',
          'felogin.emailFromName' => '',
          'felogin.emailFrom' => '',
          'felogin.showLogoutFormAfterLogin' => false,
          'felogin.showPermaLogin' => false,
          'felogin.showForgotPassword' => false,
          'felogin.recursive' => '0',
          'felogin.pid' => '0',
        ),
      )),
       'settingsTree' => 
      array (
        'camino' => 
        array (
          'header' => 
          array (
            'fixedPosition' => false,
          ),
          'colorScheme' => 'theme-caramel-cream',
        ),
        'seo' => 
        array (
          'sitemap' => 
          array (
            'pages' => 
            array (
              'additionalWhere' => '{#no_index} = 0 AND {#canonical_link} = \'\'',
              'excludePagesRecursive' => '',
              'excludedDoktypes' => '3, 4, 6, 7, 199, 254',
            ),
            'view' => 
            array (
              'layoutRootPath' => 'EXT:seo/Resources/Private/Layouts/',
              'partialRootPath' => 'EXT:seo/Resources/Private/Partials/',
              'templateRootPath' => 'EXT:seo/Resources/Private/Templates/',
            ),
          ),
        ),
        'form' => 
        array (
          'translation' => 
          array (
            'translationFile' => '',
          ),
          'templates' => 
          array (
            'layoutRootPath' => '',
            'partialRootPath' => '',
            'templateRootPath' => '',
          ),
        ),
        'felogin' => 
        array (
          'view' => 
          array (
            'layoutRootPath' => '',
            'partialRootPath' => '',
            'templateRootPath' => '',
          ),
          'domains' => '',
          'forgotLinkHashValidTime' => 12,
          'redirectDisable' => false,
          'redirectPageLogout' => 0,
          'redirectPageLoginError' => 0,
          'redirectPageLogin' => 0,
          'redirectFirstMethod' => false,
          'redirectMode' => '',
          'email' => 
          array (
            'templateName' => 'PasswordRecovery',
            'partialRootPath' => '',
            'templateRootPath' => 'EXT:felogin/Resources/Private/Email/Templates/',
            'layoutRootPath' => '',
          ),
          'dateFormat' => 'Y-m-d H:i',
          'replyToEmail' => '',
          'emailFromName' => '',
          'emailFrom' => '',
          'showLogoutFormAfterLogin' => false,
          'showPermaLogin' => false,
          'showForgotPassword' => false,
          'recursive' => '0',
          'pid' => '0',
        ),
      ),
       'flattenedArrayValues' => 
      array (
      ),
    )),
    'typoscript' => NULL,
    'tsConfig' => NULL,
    'invalidSets' => 
    array (
    ),
  ),
)];
#