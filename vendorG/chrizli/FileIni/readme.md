#   fileIni

##  requirements
-   ini text file reader and writer
-   provides array of associatedArray

##  system.ini
[stage]
DsnStage=
AppStage=

##  sample [file.ini]
[user]
nameFirst=Christian
nameLast=Listl

[ActiveDir]
domainName=EU
account=listlChr

## solution
- use hasankhan/config, reads ini, xml, json

## what is required
-   instance.cfg is placed in hardcoded dir
-   instance.cfg dir can be placed by parameter /Dsn= /DsnStage /AppStage=

