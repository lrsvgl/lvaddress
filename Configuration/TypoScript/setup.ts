#page.includeJSFooter.tx_lvaddress_file_1 = EXT:lv_address/Resources/Public/Scripts/libs/jquery.bxslider.js
#page.includeJSFooter.tx_lvaddress_file_2 = EXT:lvaddress/Resources/Public/Scripts/libs/jquery.dotimeout.js
#page.includeJSFooter.tx_lvaddress_file_3 = EXT:lvaddress/Resources/Public/Scripts/functions.js


plugin.tx_lvaddress_addresslist {
  view {
    templateRootPaths.0 = EXT:lvaddress/Resources/Private/Templates/
    templateRootPaths.1 = {$plugin.tx_lvaddress_addresslist.view.templateRootPath}
    partialRootPaths.0 = EXT:lvaddress/Resources/Private/Partials/
    partialRootPaths.1 = {$plugin.tx_lvaddress_addresslist.view.partialRootPath}
    layoutRootPaths.0 = EXT:lvaddress/Resources/Private/Layouts/
    layoutRootPaths.1 = {$plugin.tx_lvaddress_addresslist.view.layoutRootPath}
  }
  persistence {
    storagePid = {$plugin.tx_lvaddress_addresslist.persistence.storagePid}
  }
  settings {
    detailsPid = {$plugin.tx_lvaddress_addresslist.settings.detailsPid}
    listPid = {$plugin.tx_lvaddress_addresslist.settings.listPid}
  }
}