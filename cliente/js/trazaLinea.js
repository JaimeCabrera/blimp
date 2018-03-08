


function activarRuta(id){
  if (id=="L-1"){
    map.setLayoutProperty('L12', 'visibility', 'none');
    map.setLayoutProperty('L7', 'visibility', 'none');
    map.setLayoutProperty('L5', 'visibility', 'none');
    map.setLayoutProperty('L1', 'visibility', 'visible');
    map.setLayoutProperty('L3', 'visibility', 'none');
    map.setLayoutProperty('L4', 'visibility', 'none');
  }else if (id=="L-3") {
    map.setLayoutProperty('L12', 'visibility', 'none');
    map.setLayoutProperty('L7', 'visibility', 'none');
    map.setLayoutProperty('L5', 'visibility', 'none');
    map.setLayoutProperty('L1', 'visibility', 'none');
    map.setLayoutProperty('L3', 'visibility', 'visible');
    map.setLayoutProperty('L4', 'visibility', 'none');
  }else if (id=="L-4") {
    map.setLayoutProperty('L12', 'visibility', 'none');
    map.setLayoutProperty('L7', 'visibility', 'none');
    map.setLayoutProperty('L5', 'visibility', 'none');
    map.setLayoutProperty('L1', 'visibility', 'none');
    map.setLayoutProperty('L3', 'visibility', 'none');
    map.setLayoutProperty('L4', 'visibility', 'visible');
  }else if (id=="L-5") {
    map.setLayoutProperty('L12', 'visibility', 'none');
    map.setLayoutProperty('L7', 'visibility', 'none');
    map.setLayoutProperty('L5', 'visibility', 'visible');
    map.setLayoutProperty('L1', 'visibility', 'none');
    map.setLayoutProperty('L3', 'visibility', 'none');
    map.setLayoutProperty('L4', 'visibility', 'none');
  }
  else if (id=="L-7") {
    map.setLayoutProperty('L12', 'visibility', 'none');
    map.setLayoutProperty('L7', 'visibility', 'visible');
    map.setLayoutProperty('L5', 'visibility', 'none');
    map.setLayoutProperty('L1', 'visibility', 'none');
    map.setLayoutProperty('L3', 'visibility', 'none');
    map.setLayoutProperty('L4', 'visibility', 'none');
  }
  else if (id=="L-12") {
    map.setLayoutProperty('L12', 'visibility', 'visible');
    map.setLayoutProperty('L7', 'visibility', 'none');
    map.setLayoutProperty('L5', 'visibility', 'none');
    map.setLayoutProperty('L1', 'visibility', 'none');
    map.setLayoutProperty('L3', 'visibility', 'none');
    map.setLayoutProperty('L4', 'visibility', 'none');
  }
}
