// Script steps run short Javascripts
// For documentation and examples, visit:
// http://help.agiletortoise.com

// 20160524v1.1, ListlChr, add more replacement chars
// drop \ and # from Clipboard;
var sFilename = getClipboard().replace(/[\\/().#]/g,'_');
// drop leading spaces
sFilename = sFilename.replace(/^\s+/,"");
// define a drafts app usable variable
draft.defineTag("filename", sFilename);


