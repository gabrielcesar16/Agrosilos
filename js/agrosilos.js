$(document).ready(function(){

  //console.log(numero_animais)
  //console.log((numero_animais * dias_fornecimento * consumo_forragem) * 1.15)
    
  function quantidade_silo()
  {
    var numero_animais = $('[name=numero_animais]').val()
    var dias_fornecimento = $('[name=dias_fornecimento]').val()
    var consumo_forragem = $('[name=consumo_forragem]').val()

    return (numero_animais * dias_fornecimento * consumo_forragem) * 1.15
  }
    
  function volume_silo()
  {
    var densidade = $('[name=densidade]').val()
    
    return quantidade_silo() / densidade
  } 
  
   function volume_dia()
  {
    var numero_animais = $('[name=numero_animais]').val()
    var consumo_forragem = $('[name=consumo_forragem]').val()
    var densidade = $('[name=densidade]').val()
    
    return (numero_animais * consumo_forragem) / densidade
  } 
  
  //console.log(volume_dia())
  
  function area_secao()
  {
    var espessura_fatia = $('[name=espessura_fatia]').val()
    
    return volume_dia() / espessura_fatia
  } 
  
  function area_secao()
  {
    var espessura_fatia = $('[name=espessura_fatia]').val()
    
    return volume_dia() / espessura_fatia
  } 
  
  function base_menor()
  {
    //var area_secao = $('[name=area_secao]').val()
    //var altura_silo = $('[name=altura_silo]').val()
    
    return (area_secao() - 1) / 2
  } 
  
  //console.log(base_menor())
  
   function base_maior()
  {
    return base_menor() + 1
  } 
  
   function comprimento_silo()
  {
    return volume_silo() / area_secao()
  } 
  
  $('[name=numero_animais]').on('change keyup', function(){
    $('[name=quantidade_silo]').val(quantidade_silo())
    $('[name=volume_silo]').val(volume_silo())
    $('[name=volume_dia]').val(volume_dia())
    $('[name=area_secao]').val(area_secao())
    $('[name=base_menor]').val(base_menor())
    $('[name=base_maior]').val(base_maior())
    $('[name=comprimento_silo]').val(comprimento_silo())
  })
  
  $('[name=dias_fornecimento]').on('change keyup', function(){
    $('[name=quantidade_silo]').val(quantidade_silo())
    $('[name=volume_silo]').val(volume_silo())
    $('[name=volume_dia]').val(volume_dia())
    $('[name=area_secao]').val(area_secao())
    $('[name=base_menor]').val(base_menor())
    $('[name=base_maior]').val(base_maior())
    $('[name=comprimento_silo]').val(comprimento_silo())
  })
  
  $('[name=consumo_forragem]').on('change keyup', function(){
    $('[name=quantidade_silo]').val(quantidade_silo())
    $('[name=volume_silo]').val(volume_silo())
    $('[name=volume_dia]').val(volume_dia())
    $('[name=area_secao]').val(area_secao())
    $('[name=base_menor]').val(base_menor())
    $('[name=base_maior]').val(base_maior())
    $('[name=comprimento_silo]').val(comprimento_silo())
  })

  $('[name=densidade]').on('change keyup', function(){
    $('[name=quantidade_silo]').val(quantidade_silo())
    $('[name=volume_silo]').val(volume_silo())
    $('[name=volume_dia]').val(volume_dia())
    $('[name=area_secao]').val(area_secao())
    $('[name=base_menor]').val(base_menor())
    $('[name=base_maior]').val(base_maior())
    $('[name=comprimento_silo]').val(comprimento_silo())
  })
  
  
})

