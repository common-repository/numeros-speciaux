
/*----- gestion des affichages numéro surtaxés ------- */


    jQuery(document).ready(function () {
        jQuery(".bonbouaz_ns_numerosurtaxe").each(function () {

            numero = jQuery(this).html();
            type = jQuery(this).attr("data-type");
            perso = jQuery(this).attr("data-perso");
            taille = jQuery(this).attr("data-size");
            couleur = jQuery(this).attr("data-color");
            jQuery(this).html("");
            jQuery(this).append(' <span class="bonbouaz_ns_numero">' + numero + '</span>');


            if (taille == "dessous") {

                jQuery(this).addClass("bonbouaz_ns_dessous");
            }
            if (taille == "small") {

                jQuery(this).addClass("bonbouaz_ns_small");
            }
            if (type == "gratuit"){

            jQuery(this).addClass("bonbouaz_ns_gratuit");
                    jQuery(this).append('<span class="bonbouaz_ns_detail"> ' +
                    '<span class="bonbouaz_ns_service">Service  et appel </span>' +
                    '<span class="bonbouaz_ns_prixappel">gratuits</span> ' +
                    '</span>');
                    } else if (type == "normal"){

            jQuery(this).addClass("bonbouaz_ns_normal");
                    jQuery(this).append('<span class="bonbouaz_ns_detail"> ' +
                    '<span class="bonbouaz_ns_service">Service  gratuit </span>' +
                    '<span class="bonbouaz_ns_prixappel">+ prix appel</span> ' +
                    '</span>');
                    } else{
            jQuery(this).append('<span class="bonbouaz_ns_detail"> ' +
                    '<span class="bonbouaz_ns_service">Service <span class="bonbouaz_ns_personalise">' + perso + '</span></span>' +
                    '<span class="bonbouaz_ns_prixappel">+ prix appel</span> ' +
                    '</span>');


            }
			

            if (couleur == "defonce") {

                jQuery(this).addClass("bonbouaz_ns_defonce");
            }
        });
    });
