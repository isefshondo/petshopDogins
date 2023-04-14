<?php
function createProdInfo ($sectionId, $sectionName, $productName, $description) {
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

  echo "<section id=".$sectionId." class='sectionToggle'>".
    "<header id='sectionToggle'>".
    "<div class='alignIconText'>".
    "<span class='".$className."'></span>".
    $sectionName.
    "</div>".
    "<span class='bottomArrow'></span>".
    "</header>".
    "<div class='productInfoDetails'>".
    "<h1>".$productName."</h1>".
    "<p>".$description."</p>".
    "</div>".
    "</section>".
    "<span></span>";
}
?>