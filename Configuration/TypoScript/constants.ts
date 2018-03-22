
plugin.tx_lvaddress_addresslist {
  view {
    # cat=plugin.tx_lvaddress_addresslist/file; type=string; label=Path to template root (FE)
    templateRootPath = EXT:lvaddress/Resources/Private/Templates/
    # cat=plugin.tx_lvaddress_addresslist/file; type=string; label=Path to template partials (FE)
    partialRootPath = EXT:lvaddress/Resources/Private/Partials/
    # cat=plugin.tx_lvaddress_addresslist/file; type=string; label=Path to template layouts (FE)
    layoutRootPath = EXT:lvaddress/Resources/Private/Layouts/
  }
  persistence {
    # cat=plugin.tx_lvaddress_addresslist//a; type=string; label=Default storage PID
    storagePid =
  }
  settings {
    # cat=plugin.tx_lvaddress_addresslist//a; type=string; label=Default Details PID
    detailsPid =
    # cat=plugin.tx_lvaddress_addresslist//a; type=string; label=Default List PID
    listPid =
  }
}