#   AppInstaller

##  Requirements
-   creates cfgFile.xml into /approot/cfg/cfgFile.xml
-   creates appCfg.xml  into /approot/cfg/appCfg.xml

##  AppCfgDir.xml
-   will always remain in this folder, no option to change
-   contains FileNameFq to appCfg.xml

##  AppCfg.xml
-   will contain all Dsn data
-   DsnType (SqlServer)
-   DsnSqlServer


##  DraftSolutionV2
-   use hassanKhan/config (read file, get/set entries of config items

### what is needed
-   fnFileRead (hassan)
-   fnFileWrite (me)
-   fnGet() (hassan)
-   fnSet() (hassan)
-   fnAll() (getall) (hassan)