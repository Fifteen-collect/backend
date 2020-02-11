import * as React from "react";
import * as PropTypes from "prop-types";

import {Context as ThemeContext} from "Types/Theme/Context";
import {Size} from "Types/Block/Size";

export interface SizesProps {
    changeSize: (size: Size) => void;
    size: Size,
    sizes: Size[],
    style?: React.CSSProperties,
}

Sizes.propTypes = {
    changeSize: PropTypes.func,
    size: PropTypes.number,
    sizes: PropTypes.array,
    style: PropTypes.object,
} as { [T in keyof SizesProps]: PropTypes.Validator<any> };

export default function Sizes(props: SizesProps) {
    const currentTheme = React.useContext(ThemeContext);

    return <div className="row d-flex align-content-center">
        {props.sizes.map(size => {
            const active = props.size === size ? 'active' : '';

            return <button
                type="button"
                key={size}
                className={`btn col-3 p-1 noselect ${currentTheme.button.classColor} ${active}`}
                style={{
                    color: props.size === size ? currentTheme.button.selectedText : currentTheme.button.text,
                    ...(props.style || {})
                }}
                onClick={() => props.changeSize(size)}
            >
                {size}
            </button>
        })}
    </div>
}
