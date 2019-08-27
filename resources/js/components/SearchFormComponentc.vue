<template>
      <form>
        <div class="row" id="form-row">
          <div class="col" v-for="divcol in divcols" v-html="divcol">
                {{ divcol }}
          </div>
        </div>
      </form>
</template>

<script>
    export default {
       props: [],
       data: function() {
          return {
            divcols:[],
            selectedOption:[]
          }
        },
       methods:{
         selectCol: function(id){
              let res ='';
                  res +='   <select class="custom-select" v-on:change="getSelectedOption($event)" id="'+id+'">';
                    res +='    <option selected>Choose...</option>';
                    res +='    <option value="1">1</option>';
                    res +='    <option value="2">2</option>';
                    res +='    <option value="3">3</option>';
                    res +='    <option value="4">4</option>';
                    res +='    <option value="5">5</option>';
                    res +='    <option value="6">6</option>';
                    res +='    <option value="7">7</option>';
                    res +='    <option value="8">8</option>';
                    res +='    <option value="9">9</option>';
                    res +='    <option value="10">10</option>';
                    res +='    <option value="11">11</option>';
                    res +='    <option value="12">12</option>';
                    res +='    <option value="13">13</option>';
                    res +='    <option value="14">14</option>';
                    res +='    <option value="15">15</option>';
                    res +='    <option value="16">16</option>';
                    res +='    <option value="17">17</option>';
                    res +='    <option value="18">18</option>';
                  res +='   </select>';
                  return res;
            },
            displayDivCols: function(){
                for(let i=1; i < 7; i++ ){
                  this.divcols.push( this.selectCol( i ) )
                }
                // console.log( this.divcols )
            },
            getSelectedOption: function(event) {
                console.log(event.target.value)
          }

       },
       beforeMount(){
         this.displayDivCols();
       },
        mounted() {
            console.log('Component mounted.')

        }
    }
</script>
