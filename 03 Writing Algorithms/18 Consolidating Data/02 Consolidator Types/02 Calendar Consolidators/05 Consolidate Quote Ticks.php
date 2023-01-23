<?php 
include(DOCS_RESOURCES."/consolidators/manage-consolidators.php");
$dataFormatInfo = new TickQuoteBarConsolidatorFormatInfo();

$createConsolidatorExtraArgs = ", TickType.Quote";
$shortcutClass1 = " class='csharp'"; // # Python currently unavailable. See https://github.com/QuantConnect/Lean/issues/6814
$shortcutClass2 = "csharp";
$shortCutTickTypeArg = "TickType.Quote, ";

$consolidatorInfo = new CalendarConsolidatorInfo($createConsolidatorExtraArgs, $shortcutClass1, $shortcutClass2, $shortCutTickTypeArg);

$getConsolidatorText($dataFormatInfo, $consolidatorInfo);
?>