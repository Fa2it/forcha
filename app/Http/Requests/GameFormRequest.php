<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GameFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }

    public function getQueryParams(){
      $r = [];
      for( $ii=1; $ii<6; $ii++){
            $tmp = (int) $this->input('sel_'.$ii );
            if( $tmp > 0 )
                $r['col_'.$ii] = $tmp;


      }
      if( count( $r ) ){
          $this->session()->put( 'queryParams', $r);
      }
      return $this->session()->get('queryParams',[] );
    }

    public function getgameQueryParams(){
      $r = [];
      for( $ii=1; $ii<6; $ii++){
            $tmp = (int) $this->input('sel_'.$ii );
            if( $tmp > 0 )
                $r['col_'.$ii] = $tmp;
      }
      return $r;
    }


}
