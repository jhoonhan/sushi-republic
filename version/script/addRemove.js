			$(document).ready(function(){
				$('#menu1').click(function(){
					$('#menu').removeClass('rowExpanded')
					$('#gallery').removeClass('rowExpanded')
					$('#menu1').addClass('clickedMenu')
					$('#menu12').removeClass('clickedMenu')
					$('#menu2').removeClass('clickedMenu')
					$('#menu3').removeClass('clickedMenu')
					$('#menu4').removeClass('clickedMenu')
					$('#menuLi1').addClass('clickedMenuLi')
					$('#menuLi12').removeClass('clickedMenuLi')
					$('#menuLi2').removeClass('clickedMenuLi')
					$('#menuLi3').removeClass('clickedMenuLi')
					$('#menuLi4').removeClass('clickedMenuLi')
					setTimeout(function(){ $('#menuNav').removeClass('menuNavActivated') },400)
					setTimeout(function(){ $('#logo').addClass('alternateBand') },400)
					setTimeout(function(){ $('#logo').removeClass('alternateBand1') },400)
					setTimeout(function(){ $('#logo').removeClass('alternateBand2') },400)
					setTimeout(function(){ $('#logoContent1').addClass('logoContentActivated') },400)
					setTimeout(function(){ $('#logoContent2').removeClass('logoContentActivated') },400)
					setTimeout(function(){ $('#logoContent3').removeClass('logoContentActivated') },400)
					setTimeout(function(){ $('#logoContent4').removeClass('logoContentActivated') },400)
				});
				$('#menu12').click(function(){
					$('#menu').removeClass('rowExpanded')
					$('#gallery').removeClass('rowExpanded')
					$('#menu12').addClass('clickedMenu')
					$('#menu1').removeClass('clickedMenu')
					$('#menu2').removeClass('clickedMenu')
					$('#menu3').removeClass('clickedMenu')
					$('#menu4').removeClass('clickedMenu')
					$('#menuLi12').addClass('clickedMenuLi')
					$('#menuLi1').removeClass('clickedMenuLi')
					$('#menuLi2').removeClass('clickedMenuLi')
					$('#menuLi3').removeClass('clickedMenuLi')
					$('#menuLi4').removeClass('clickedMenuLi')
					setTimeout(function(){ $('#menuNav').removeClass('menuNavActivated') },400)
					setTimeout(function(){ $('#logo').addClass('alternateBand1') },400)
					setTimeout(function(){ $('#logo').removeClass('alternateBand2') },400)
					setTimeout(function(){ $('#logoContent2').addClass('logoContentActivated') },400)
					setTimeout(function(){ $('#logoContent1').removeClass('logoContentActivated') },400)
					setTimeout(function(){ $('#logoContent3').removeClass('logoContentActivated') },400)
					setTimeout(function(){ $('#logoContent4').removeClass('logoContentActivated') },400)
				});
				$('#menu2').click(function(){
					$('#menu').addClass('rowExpanded')
					$('#gallery').removeClass('rowExpanded')
					$('#menu2').addClass('clickedMenu')
					$('#menu1').removeClass('clickedMenu')
					$('#menu12').removeClass('clickedMenu')
					$('#menu3').removeClass('clickedMenu')
					$('#menu4').removeClass('clickedMenu')
					$('#menuLi2').addClass('clickedMenuLi')
					$('#menuLi1').removeClass('clickedMenuLi')
					$('#menuLi12').removeClass('clickedMenuLi')
					$('#menuLi3').removeClass('clickedMenuLi')
					$('#menuLi4').removeClass('clickedMenuLi')
					setTimeout(function(){ $('#menuNav').addClass('menuNavActivated') },600)
					setTimeout(function(){ $('#logo').addClass('alternateBand1') },400)
					setTimeout(function(){ $('#logo').removeClass('alternateBand2') },400)
					setTimeout(function(){ $('#logoContent2').addClass('logoContentActivated') },400)
					setTimeout(function(){ $('#logoContent1').removeClass('logoContentActivated') },400)
					setTimeout(function(){ $('#logoContent3').removeClass('logoContentActivated') },400)
					setTimeout(function(){ $('#logoContent4').removeClass('logoContentActivated') },400)
				});
				$('#menu3').click(function(){
					$('#menu').removeClass('rowExpanded')
					$('#menu3').addClass('clickedMenu')
					$('#menu1').removeClass('clickedMenu')
					$('#menu12').removeClass('clickedMenu')
					$('#menu2').removeClass('clickedMenu')
					$('#menu4').removeClass('clickedMenu')
					$('#menuLi3').addClass('clickedMenuLi')
					$('#menuLi1').removeClass('clickedMenuLi')
					$('#menuLi12').removeClass('clickedMenuLi')
					$('#menuLi2').removeClass('clickedMenuLi')
					$('#menuLi4').removeClass('clickedMenuLi')
					setTimeout(function(){ $('#menuNav').removeClass('menuNavActivated') },400)
					setTimeout(function(){ $('#logo').addClass('alternateBand2') },400)
					setTimeout(function(){ $('#logoContent3').addClass('logoContentActivated') },400)
					setTimeout(function(){ $('#logoContent1').removeClass('logoContentActivated') },400)
					setTimeout(function(){ $('#logoContent2').removeClass('logoContentActivated') },400)
					setTimeout(function(){ $('#logoContent4').removeClass('logoContentActivated') },400)
				});
				$('#menu4').click(function(){
					$('#menu').removeClass('rowExpanded')
					$('#gallery').removeClass('rowExpanded')
					$('#menu4').addClass('clickedMenu')
					$('#menu1').removeClass('clickedMenu')
					$('#menu12').removeClass('clickedMenu')
					$('#menu2').removeClass('clickedMenu')
					$('#menu3').removeClass('clickedMenu')
					$('#menuLi4').addClass('clickedMenuLi')
					$('#menuLi1').removeClass('clickedMenuLi')
					$('#menuLi12').removeClass('clickedMenuLi')
					$('#menuLi2').removeClass('clickedMenuLi')
					$('#menuLi3').removeClass('clickedMenuLi')
					setTimeout(function(){ $('#menuNav').removeClass('menuNavActivated') },400)
					setTimeout(function(){ $('#logo').addClass('alternateBand1') },400)
					setTimeout(function(){ $('#logo').removeClass('alternateBand2') },400)
					setTimeout(function(){ $('#logoContent4').addClass('logoContentActivated') },400)
					setTimeout(function(){ $('#logoContent1').removeClass('logoContentActivated') },400)
					setTimeout(function(){ $('#logoContent2').removeClass('logoContentActivated') },400)
					setTimeout(function(){ $('#logoContent3').removeClass('logoContentActivated') },400)				 
				});
				$('#scrollNavActivator').click(function(){
					setTimeout(function(){ $('#scrollNav').addClass('scrollNavActivated'); },300)
					setTimeout(function(){ $('#scrollNav').removeClass('scrollNavDeactivated'); },300)
					$('#hamburger').addClass('hamburgerActivated');
					$('#hamburger2').addClass('hamburgerActivated');
					$('#hamburger').removeClass('hamburgerDeactivated');
					$('#hamburger2').removeClass('hamburgerDeactivated');
					setTimeout(function(){ $('#hamburger').addClass('opacity0'); },200)
					setTimeout(function(){ $('#hamburger').removeClass('opacity1'); },200)
					setTimeout(function(){ $('#hamburger2').addClass('opacity1'); },200)
					setTimeout(function(){ $('#hamburger2').removeClass('opacity0'); },200)
					$('#scrollNavDeactivator').removeClass('hamburgerHiddenDeactivated');
					$('#scrollNavDeactivator').addClass('hamburgerHiddenActivated');
				});
				$('#scrollNavDeactivator').click(function(){
					$('#scrollNav').removeClass('scrollNavActivated');
					$('#scrollNav').addClass('scrollNavDeactivated');
					$('#hamburger').removeClass('hamburgerActivated');
					$('#hamburger2').removeClass('hamburgerActivated');
					$('#hamburger').addClass('hamburgerDeactivated');
					$('#hamburger2').addClass('hamburgerDeactivated');
					setTimeout(function(){ $('#hamburger').addClass('opacity1'); },200)
					setTimeout(function(){ $('#hamburger').removeClass('opacity0'); },200)
					setTimeout(function(){ $('#hamburger2').addClass('opacity0'); },200)
					setTimeout(function(){ $('#hamburger2').removeClass('opacity1'); },200)
					setTimeout(function(){ $('#scrollNavDeactivator').removeClass('hamburgerHiddenActivated'); },500)
					setTimeout(function(){ $('#scrollNavDeactivator').addClass('hamburgerHiddenDeactivated'); },500)
				});
				$('.menu').click(function(){
					$('#scrollNav').removeClass('scrollNavActivated');
					$('#scrollNav').addClass('scrollNavDeactivated');
					$('#hamburger').removeClass('hamburgerActivated');
					$('#hamburger2').removeClass('hamburgerActivated');
					$('#hamburger').addClass('hamburgerDeactivated');
					$('#hamburger2').addClass('hamburgerDeactivated');
					setTimeout(function(){ $('#hamburger').addClass('opacity1'); },200)
					setTimeout(function(){ $('#hamburger').removeClass('opacity0'); },200)
					setTimeout(function(){ $('#hamburger2').addClass('opacity0'); },200)
					setTimeout(function(){ $('#hamburger2').removeClass('opacity1'); },200)
					setTimeout(function(){ $('#scrollNavDeactivator').removeClass('hamburgerHiddenActivated'); },500)
					setTimeout(function(){ $('#scrollNavDeactivator').addClass('hamburgerHiddenDeactivated'); },500)
				});
				$('.menuH1').click(function(){
					setTimeout(function(){ $('#menuNav').removeClass('menuNavActivated') },600)
				});
				$('.menuH12').click(function(){
					setTimeout(function(){ $('#menuNav').removeClass('menuNavActivated') },600)
				});
				$('.menuH2').click(function(){
					setTimeout(function(){ $('#menuNav').addClass('menuNavActivated') },600)
				});
				$('.menuH3').click(function(){
					setTimeout(function(){ $('#menuNav').removeClass('menuNavActivated') },600)
				});
				$('.menuH4').click(function(){
					setTimeout(function(){ $('#menuNav').removeClass('menuNavActivated') },600)
				});
			});