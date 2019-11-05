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
    var espessura_fatia = $('[name=espessura_fatia]').val()/100
    
    return volume_dia() / espessura_fatia
  } 
  
  function base_menor()
  {
    var area_secao = $('[name=area_secao]').val()
    var altura_silo = $('[name=altura_silo]').val()
    
    
    return (area_secao/altura_silo) - 0.5
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

  function espessura_diaria()
  {
    return volume_dia() / area_secao()
  } 
  
  $('[name=numero_animais]').on('change keyup', function(){
    $('[name=quantidade_silo]').val(quantidade_silo())
    $('[name=volume_silo]').val(volume_silo())
    $('[name=volume_dia]').val(volume_dia())
    $('[name=area_secao]').val(area_secao())
    $('[name=base_menor]').val(base_menor())
    $('[name=base_maior]').val(base_maior())
    $('[name=comprimento_silo]').val(comprimento_silo())

    $('.chart_base_maior').text(base_maior())
    $('.chart_base_menor').text(base_menor())
    $('.chart_comprimento_silo').text(comprimento_silo())
    $('.chart_altura_silo').text($('[name=altura_silo]').val())
    
  })
  
  $('[name=dias_fornecimento]').on('change keyup', function(){
    $('[name=quantidade_silo]').val(quantidade_silo())
    $('[name=volume_silo]').val(volume_silo())
    $('[name=volume_dia]').val(volume_dia())
    $('[name=area_secao]').val(area_secao())
    $('[name=base_menor]').val(base_menor())
    $('[name=base_maior]').val(base_maior())
    $('[name=comprimento_silo]').val(comprimento_silo())

    $('.chart_base_maior').text(base_maior())
    $('.chart_base_menor').text(base_menor())
    $('.chart_comprimento_silo').text(comprimento_silo())
    $('.chart_altura_silo').text($('[name=altura_silo]').val())

  })
  
  $('[name=consumo_forragem]').on('change keyup', function(){
    $('[name=quantidade_silo]').val(quantidade_silo())
    $('[name=volume_silo]').val(volume_silo())
    $('[name=volume_dia]').val(volume_dia())
    $('[name=area_secao]').val(area_secao())
    $('[name=base_menor]').val(base_menor())
    $('[name=base_maior]').val(base_maior())
    $('[name=comprimento_silo]').val(comprimento_silo())

    $('.chart_base_maior').text(base_maior())
    $('.chart_base_menor').text(base_menor())
    $('.chart_comprimento_silo').text(comprimento_silo())
    $('.chart_altura_silo').text($('[name=altura_silo]').val())

  })

  $('[name=altura_silo]').on('change keyup', function(){
    $('[name=quantidade_silo]').val(quantidade_silo())
    $('[name=volume_silo]').val(volume_silo())
    $('[name=volume_dia]').val(volume_dia())
    $('[name=area_secao]').val(area_secao())
    $('[name=base_menor]').val(base_menor())
    $('[name=base_maior]').val(base_maior())
    $('[name=comprimento_silo]').val(comprimento_silo())

    $('.chart_base_maior').text(base_maior())
    $('.chart_base_menor').text(base_menor())
    $('.chart_comprimento_silo').text(comprimento_silo())
    $('.chart_altura_silo').text($('[name=altura_silo]').val())

  })
  
  $('[name=espessura_fatia]').on('change keyup', function(){
    $('[name=quantidade_silo]').val(quantidade_silo())
    $('[name=volume_silo]').val(volume_silo())
    $('[name=volume_dia]').val(volume_dia())
    $('[name=area_secao]').val(area_secao())
    $('[name=base_menor]').val(base_menor())
    $('[name=base_maior]').val(base_maior())
    $('[name=comprimento_silo]').val(comprimento_silo())

    $('.chart_base_maior').text(base_maior())
    $('.chart_base_menor').text(base_menor())
    $('.chart_comprimento_silo').text(comprimento_silo())
    $('.chart_altura_silo').text($('[name=altura_silo]').val())
    
  })

  $('[name=espessura_fatia]').on('blur', function(){
    if(parseInt($(this).val()) < 20)
    {
      alert('Valor mínimo aceito para Espessura da Fatia é 20.')
      $(this).focus()
    }
  })
  
  $('[name=densidade]').on('change keyup', function(){
    $('[name=quantidade_silo]').val(quantidade_silo())
    $('[name=volume_silo]').val(volume_silo())
    $('[name=volume_dia]').val(volume_dia())
    $('[name=area_secao]').val(area_secao())
    $('[name=base_menor]').val(base_menor())
    $('[name=base_maior]').val(base_maior())
    $('[name=comprimento_silo]').val(comprimento_silo())

    $('.chart_base_maior').text(base_maior())
    $('.chart_base_menor').text(base_menor())
    $('.chart_comprimento_silo').text(comprimento_silo())
    $('.chart_altura_silo').text($('[name=altura_silo]').val())

  })

  $('[name=base_menor').on('change keyup', function(){
    $('[name=quantidade_silo]').val(quantidade_silo())
    $('[name=volume_silo]').val(volume_silo())
    $('[name=volume_dia]').val(volume_dia())
    $('[name=area_secao]').val(area_secao())
    $('[name=base_menor]').val(base_menor())
    $('[name=base_maior]').val(base_maior())
    $('[name=comprimento_silo]').val(comprimento_silo())
    $('[name=espessura_resultado]').val(espessura_diaria())

  })
  
  
})
