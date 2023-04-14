<?php
function createProdInfo ($sectionId, $sectionName) {
  $className = "";
  $iconsSection = array(
    array(
      "sectionName" => "sectionInformations",
      "iconSection" => "infoIcon",
    ),
    array(
      "sectionName" => "sectionSpecifics",
      "iconSection" => "specificIcon",
    ),
    array(
      "sectionName" => "sectionRatings",
      "iconSection" => "ratingsIcon",
    ),
    array(
      "sectionName" => "sectionQuestions",
      "iconSection" => "questionsIcon",
    ),
  );
  foreach ($iconsSection as $icon) {
    if($sectionId === $icon["sectionName"]) {
      $className = $icon["iconSection"];
      break;
    }
  }

  echo "<section id=".$sectionId." class='sectionToggle' >".
    "<header id='sectionToggle'>".
    "<div class='alignIconText'>".
    "<span class='".$className."'></span>".
    $sectionName.
    "</div>".
    "<span class='bottomArrow'></span>".
    "</header>".
    "<div class='productInfoDetails'>".
    "<h1>O nome do produto</h1>".
    "<p>Um texto gigante</p>".
    "</div>".
    "</section>".
    "<span></span>";
}
?>