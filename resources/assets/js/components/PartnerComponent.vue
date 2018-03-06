<template>
    <div>
        <h3 class="center-align">Datos de la Sociedad</h3> 
        <div class="row" v-for="(item, index) in partners">
            <div class="input-field col s4">
                <input :id="'partners[' + index + '][name]'" :name="'partners[' + index + '][name]'" type="text" class="validate">
                <label :for="'partners[' + index + '][name]'">Nombre</label>
            </div>
            <div class="input-field col s2">
                <input :id="'partners[' + index + '][percentage]'" :name="'partners[' + index + '][percentage]'" type="text" class="validate">
                <label :for="'partners[' + index + '][percentage]'">Porcentaje</label>
            </div>
            <div class="input-field col s2">
                <input :id="'partners[' + index + '][rut]'" :name="'partners[' + index + '][rut]'" type="text" class="validate">
                <label :for="'partners[' + index + '][rut]'">Rut</label>
            </div>
            <div class="input-field col s2">
                <input :id="'partners[' + index + '][sii]'" :name="'partners[' + index + '][sii]'" type="text" class="validate">
                <label :for="'partners[' + index + '][sii]'">SII</label>
            </div>
            <div class="col s2 right-align" v-if="index == counter">
                <a class="btn btn-floating btn-large waves-light" @click="addPartner"><i class="material-icons">add</i></a>
            </div>
        </div>    
    </div>
</template>
<script>
export default {
    data() {
        return {
            partners: [{ 
                name: 'partners[0][name]', 
                percentage: 'partners[0][percentage]', 
                rut: 'partners[0][rut]', 
                sii: 'partners[0][sii]'
            }],
            counter: 0
        }
    },
    methods: {
        addPartner: function(e) {
            e.preventDefault();
            //this.partners.push(Vue.util.extend({}, this.partners));
            this.counter++;
            this.partners.push({ 
                name: 'partners[' + this.counter + '][name]', 
                percentage: 'partners[' + this.counter + '][percentage]', 
                rut: 'partners[' + this.counter + '][rut]', 
                sii: 'partners[' + this.counter + '][sii]' 
            });
            
            
        }
    }
}
</script>
