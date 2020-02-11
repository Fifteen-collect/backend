import * as React from "react";
import * as PropTypes from "prop-types";
import {Context as ThemeContext} from "Types/Theme/Context";

export function Modal() {
    const theme = React.useContext(ThemeContext);

    return <div
        className="container-fluid inner-content shadow mb-2"
        style={{backgroundColor: theme.main.header.background}}
    >

    </div>
}
