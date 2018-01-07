<?php

  function getHomePage() {
    $welcome = "<h2>Project EVI</h2>";
    $welcome .= "<p>Das Verwaltungstool der IPA-Kriterien. Mach's einfach mit EVI! EVI hat's im Griff. Mit EVI behältst du die Kriterien deiner IPA im Blick.</p>";
    return $welcome;
  }

  function getCriteriaPage() {
    $criteria = getCriteria();
    $criteriaHTML = getCriteriaString($criteria);
  }

  function getCriteria(){


  }

  function getCriteriaString($criterias) {
    if(is_array($criterias)) {
      foreach ($criterias as $criteria) {
            $criteriaString .= "<div class='wrapper'>
              <div class='criteria'>
                <div class='criteria-props'>
                  <span class='criteria-id'>".$criteria['kriterien_nr']."</span>
                </div>
                <div class='criteria-title'>
                <h3>".$criteria['titel']."</h3>
                </div>
                <div class='criteria-cont'>
                  <div class='criteria-desc'>".$criteria['beschreibung']."</div>
                  <div class='criteria-lvl'><span class='lvl'>Gütestufe 3</span>".$criteria['stufe3']."</div>
                  <div class='criteria-lvl'><span class='lvl'>Gütestufe 2</span>".$criteria['stufe2']."</div>
                  <div class='criteria-lvl'><span class='lvl'>Gütestufe 1</span>".$criteria['stufe1']."</div>
                  <div class='criteria-lvl'><span class='lvl'>Gütestufe 0</span>".$criteria['stufe0']."</div>
                </div>
              </div>

            </div>";
      }
    }
    return $criteriaString();
  }

?>
