import React, { Component } from 'react'
import {
    faUser,
  } from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
class UserIcon extends Component{
    render(){
        return( 
            <div>
                <FontAwesomeIcon icon={faUser} className="mr-2" /> User
            </div>
        )
    }
}

export default UserIcon;