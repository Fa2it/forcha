<template>
      <form action="/home" method="post">
        <div class="row" id="form-row">
          <div class="col pr-1 pl-1">
              <select class="custom-select" v-on:change="getSelectedOption($event, 'sel_1')" name="sel_1" >
                   <option selected>Choose...</option>
                   <option value="1">1</option>
                   <option value="2">2</option>
                   <option value="3">3</option>
                   <option value="4">4</option>
                   <option value="5">5</option>
                   <option value="6">6</option>
                   <option value="7">7</option>
                   <option value="8">8</option>
                   <option value="9">9</option>
                   <option value="10">10</option>
                   <option value="11">11</option>
                   <option value="12">12</option>
                   <option value="13">13</option>
                   <option value="14">14</option>
                   <option value="15">15</option>
                   <option value="16">16</option>
                   <option value="17">17</option>
                   <option value="18">18</option>
              </select>
          </div>
          <div class="col pr-1 pl-1">
              <select class="custom-select" v-on:change="getSelectedOption($event, 'sel_2')" name="sel_2" >
                   <option selected>Choose...</option>
                   <option value="1">1</option>
                   <option value="2">2</option>
                   <option value="3">3</option>
                   <option value="4">4</option>
                   <option value="5">5</option>
                   <option value="6">6</option>
                   <option value="7">7</option>
                   <option value="8">8</option>
                   <option value="9">9</option>
                   <option value="10">10</option>
                   <option value="11">11</option>
                   <option value="12">12</option>
                   <option value="13">13</option>
                   <option value="14">14</option>
                   <option value="15">15</option>
                   <option value="16">16</option>
                   <option value="17">17</option>
                   <option value="18">18</option>
              </select>
          </div>
          <div class="col pr-1 pl-1">
              <select class="custom-select" v-on:change="getSelectedOption($event, 'sel_3')" name="sel_3">
                   <option selected>Choose...</option>
                   <option value="1">1</option>
                   <option value="2">2</option>
                   <option value="3">3</option>
                   <option value="4">4</option>
                   <option value="5">5</option>
                   <option value="6">6</option>
                   <option value="7">7</option>
                   <option value="8">8</option>
                   <option value="9">9</option>
                   <option value="10">10</option>
                   <option value="11">11</option>
                   <option value="12">12</option>
                   <option value="13">13</option>
                   <option value="14">14</option>
                   <option value="15">15</option>
                   <option value="16">16</option>
                   <option value="17">17</option>
                   <option value="18">18</option>
              </select>
          </div>
          <div class="col pr-1 pl-1">
              <select class="custom-select" v-on:change="getSelectedOption($event, 'sel_4')" name="sel_4">
                   <option selected>Choose...</option>
                   <option value="1">1</option>
                   <option value="2">2</option>
                   <option value="3">3</option>
                   <option value="4">4</option>
                   <option value="5">5</option>
                   <option value="6">6</option>
                   <option value="7">7</option>
                   <option value="8">8</option>
                   <option value="9">9</option>
                   <option value="10">10</option>
                   <option value="11">11</option>
                   <option value="12">12</option>
                   <option value="13">13</option>
                   <option value="14">14</option>
                   <option value="15">15</option>
                   <option value="16">16</option>
                   <option value="17">17</option>
                   <option value="18">18</option>
              </select>
          </div>
          <div class="col pr-1 pl-1">
              <select class="custom-select" v-on:change="getSelectedOption($event, 'sel_5')" name="sel_5">
                   <option selected>Choose...</option>
                   <option value="1">1</option>
                   <option value="2">2</option>
                   <option value="3">3</option>
                   <option value="4">4</option>
                   <option value="5">5</option>
                   <option value="6">6</option>
                   <option value="7">7</option>
                   <option value="8">8</option>
                   <option value="9">9</option>
                   <option value="10">10</option>
                   <option value="11">11</option>
                   <option value="12">12</option>
                   <option value="13">13</option>
                   <option value="14">14</option>
                   <option value="15">15</option>
                   <option value="16">16</option>
                   <option value="17">17</option>
                   <option value="18">18</option>
              </select>
          </div>
          <div class="col pr-1 pl-1">
              <select class="custom-select" v-on:change="getSelectedOption($event, 'sel_6')" name="sel_6">
                   <option selected>Choose...</option>
                   <option value="1">1</option>
                   <option value="2">2</option>
                   <option value="3">3</option>
                   <option value="4">4</option>
                   <option value="5">5</option>
                   <option value="6">6</option>
                   <option value="7">7</option>
                   <option value="8">8</option>
                   <option value="9">9</option>
                   <option value="10">10</option>
                   <option value="11">11</option>
                   <option value="12">12</option>
                   <option value="13">13</option>
                   <option value="14">14</option>
                   <option value="15">15</option>
                   <option value="16">16</option>
                   <option value="17">17</option>
                   <option value="18">18</option>
              </select>
          </div>
          <div class="col pr-1 pl-1">
              <select class="custom-select" v-on:change="getSelectedOption($event, 'sel_7')" name="sel_7">
                   <option selected>Choose...</option>
                   <option value="1">1</option>
                   <option value="2">2</option>
                   <option value="3">3</option>
                   <option value="4">4</option>
                   <option value="5">5</option>
                   <option value="6">6</option>
                   <option value="7">7</option>
                   <option value="8">8</option>
                   <option value="9">9</option>
                   <option value="10">10</option>
                   <option value="11">11</option>
                   <option value="12">12</option>
                   <option value="13">13</option>
                   <option value="14">14</option>
                   <option value="15">15</option>
                   <option value="16">16</option>
                   <option value="17">17</option>
                   <option value="18">18</option>
              </select>
          </div>
          <div class="col pr-1 pl-1">
              <select class="custom-select" v-on:change="getSelectedOption($event, 'sel_8')" name="sel_8">
                   <option selected>Choose...</option>
                   <option value="1">1</option>
                   <option value="2">2</option>
                   <option value="3">3</option>
                   <option value="4">4</option>
                   <option value="5">5</option>
                   <option value="6">6</option>
                   <option value="7">7</option>
                   <option value="8">8</option>
                   <option value="9">9</option>
                   <option value="10">10</option>
                   <option value="11">11</option>
                   <option value="12">12</option>
                   <option value="13">13</option>
                   <option value="14">14</option>
                   <option value="15">15</option>
                   <option value="16">16</option>
                   <option value="17">17</option>
                   <option value="18">18</option>
              </select>
          </div>
        </div>
        <div class="row justify-content-center">
          <input type="hidden" name="_token" :value="csrf">
          <button class="btn btn-primary mt-2" type="submit" v-bind:disabled="isDisabled">Submit</button>
        </div>
      </form>
</template>

<script>
    export default {
       props: [
       ],
       data: function() {
          return {
            selectedOption:[],
            isDisabled:true,
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
          }
        },
       methods:{
            getSelectedOption: function(event, id) {

               // if in array throw; alert-danger
               if( this.arrayContains( this.selectedOption, event.target.value ) ){
                    event.target.classList.add("alert-danger");
               } else {
                    event.target.classList.remove("alert-danger");
                    this.selectedOption.push( event.target.value )
               }
               this.checkDisabled( this.selectedOption.length )
          },
          arrayContains(arr,el){
              for(let i=0; i<arr.length; i++ ){
                  if( arr[i] == el )
                    return true;
              }
              return false;
          },
          checkDisabled: function( inp ){
                this.isDisabled =  !( inp > 2 );
                return this.isDisabled;
          }

       },
       beforeMount(){
       },
        mounted() {
            // console.log('Component mounted.')
        }
    }
</script>
