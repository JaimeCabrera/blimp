


function activarRuta(id){
  if (id=="L-1"){
    map.setLayoutProperty('L6', 'visibility', 'none');
    map.setLayoutProperty('L5', 'visibility', 'none');
    map.setLayoutProperty('L1', 'visibility', 'visible');
    map.setLayoutProperty('L3', 'visibility', 'none');
    map.setLayoutProperty('L4', 'visibility', 'none');
  }else if (id=="L-3") {
    map.setLayoutProperty('L6', 'visibility', 'none');
    map.setLayoutProperty('L5', 'visibility', 'none');
    map.setLayoutProperty('L1', 'visibility', 'none');
    map.setLayoutProperty('L3', 'visibility', 'visible');
    map.setLayoutProperty('L4', 'visibility', 'none');
  }else if (id=="L-4") {
    map.setLayoutProperty('L6', 'visibility', 'none');
    map.setLayoutProperty('L5', 'visibility', 'none');
    map.setLayoutProperty('L1', 'visibility', 'none');
    map.setLayoutProperty('L3', 'visibility', 'none');
    map.setLayoutProperty('L4', 'visibility', 'visible');
  }else if (id=="L-5") {
    map.setLayoutProperty('L6', 'visibility', 'none');
    map.setLayoutProperty('L5', 'visibility', 'visible');
    map.setLayoutProperty('L1', 'visibility', 'none');
    map.setLayoutProperty('L3', 'visibility', 'none');
    map.setLayoutProperty('L4', 'visibility', 'none');
  }
  else if (id=="L-5") {
    map.setLayoutProperty('L6', 'visibility', 'visible');
    map.setLayoutProperty('L5', 'visibility', 'none');
    map.setLayoutProperty('L1', 'visibility', 'none');
    map.setLayoutProperty('L3', 'visibility', 'none');
    map.setLayoutProperty('L4', 'visibility', 'none');
  }
}
