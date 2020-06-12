require('./bootstrap');
$(document).ready(function () {
    var filter = $('#filter');
    var api = window.location.protocol + '//' + window.location.host + '/api/students/genders';
    var container = $('.box');
    //init handelbars
    var source = $('#entry-template').html();
    var template = Handlebars.compile(source);
    
    filter.on('change', function(){
        var gender = filter.val();
        
        $.ajax({
            url: api,
            method: 'POST',
            data: {
                filter: gender
            }
        })
        .done(function(res){
            
            if(res.response.length > 0) {
                //pulisco container 
                container.html(' ');

                for (var i = 0; i < res.response.length; i++) {
                    var self = res.response[i];

                    var context = {
                        slug: self.slug,
                        foto: self.img,
                        nome: self.nome,
                        assunzione: (self.genere == 'm') ? 'Assunto' : 'Assunta',
                        azienda: self.azienda,
                        ruolo: self.ruolo,
                        eta: self.eta,
                        descrizione: self.descrizione,
                        

                    }
                    var html = template(context);
                    container.append(html);


                }
            } else {
                console.log('res.error');
                
            }
            
        }).fail(function(){ 
            console.log('Error');
            
        });
        
    });
    
    
}); // <== end ready
