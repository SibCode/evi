<?php

  function getHomePage() {
    $welcome = "<h2>Project EVI</h2>";
    $welcome .= "<p>Das Verwaltungstool der IPA-Kriterien. Mach's einfach mit EVI! EVI hat's im Griff. Mit EVI behältst du die Kriterien deiner IPA im Blick.</p>";
    return $welcome;
  }

  function getCriteriaPage() {
    $criteria = getCriteria();
    $criteriaHTML = getCriteriaString($criteria);
    return $criteriaHTML;
  }

  function getCriteria(){
    include_once('connectDB.php');
    $connectionDB = connectToDB();
    $query = "SELECT * FROM kriterien";
    $preparedStatement = $connectionDB->prepare($query);
    $preparedStatement->execute();
    $result = $preparedStatement->fetchAll();
    $connectionDB = null;
    return $result;
  }

  function getCriteriaString($criterias) {
    $criteriaString = "";
    if(!empty($criterias)) {
      foreach ($criterias as $criteria) {
            $criteriaString .= "<div class='wrapper'>
              <div class='criteria'>
                <div class='criteria-props'>
                  <span class='criteria-id'>".$criteria['kriterien_nr']."</span>
                </div>
                <div class='criteria-check'>
                  <input type='checkbox'>
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
    return $criteriaString;
  }

?>
